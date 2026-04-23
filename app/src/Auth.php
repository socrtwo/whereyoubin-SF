<?php
declare(strict_types=1);

namespace TravelLog;

/**
 * Email + password authentication with a long-lived, database-backed
 * session cookie. The cookie holds a 256-bit random token so:
 *   - cleared cookies → user re-logs in and all data is still on their account
 *   - different browser / computer → same email + password restores everything
 *   - ISP changes IP → no effect (we never bind sessions to IP)
 *
 * Passwords are stored with PASSWORD_DEFAULT (currently bcrypt, future-proof).
 */
final class Auth
{
    public const COOKIE = 'tl_sess';
    private const LIFETIME = 60 * 60 * 24 * 365; // 1 year

    public static function register(string $email, string $password, ?string $displayName = null): array
    {
        $email = self::normaliseEmail($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['ok' => false, 'error' => 'Please enter a valid email address.'];
        }
        if (strlen($password) < 8) {
            return ['ok' => false, 'error' => 'Password must be at least 8 characters.'];
        }
        $existing = Database::run('SELECT id FROM users WHERE email = :e', [':e' => $email])->fetch();
        if ($existing) {
            return ['ok' => false, 'error' => 'An account with that email already exists. Please sign in.'];
        }
        Database::run(
            'INSERT INTO users (email, password_hash, display_name) VALUES (:e, :p, :n)',
            [
                ':e' => $email,
                ':p' => password_hash($password, PASSWORD_DEFAULT),
                ':n' => $displayName !== null && $displayName !== '' ? $displayName : null,
            ]
        );
        $userId = (int) Database::pdo()->lastInsertId();
        return ['ok' => true, 'user_id' => $userId];
    }

    public static function login(string $email, string $password): array
    {
        $email = self::normaliseEmail($email);
        $row = Database::run('SELECT id, password_hash FROM users WHERE email = :e', [':e' => $email])->fetch();
        if (!$row || !password_verify($password, (string) $row['password_hash'])) {
            return ['ok' => false, 'error' => 'Invalid email or password.'];
        }
        // Re-hash if algorithm improved since signup
        if (password_needs_rehash((string) $row['password_hash'], PASSWORD_DEFAULT)) {
            Database::run('UPDATE users SET password_hash = :p WHERE id = :id', [
                ':p' => password_hash($password, PASSWORD_DEFAULT),
                ':id' => (int) $row['id'],
            ]);
        }
        return ['ok' => true, 'user_id' => (int) $row['id']];
    }

    /** Create a DB-backed session and set a long-lived cookie. */
    public static function startSession(int $userId): void
    {
        $token   = bin2hex(random_bytes(32));
        $expires = gmdate('Y-m-d H:i:s', time() + self::LIFETIME);
        Database::run(
            'INSERT INTO user_sessions (id, user_id, expires_at) VALUES (:id, :u, :e)',
            [':id' => hash('sha256', $token), ':u' => $userId, ':e' => $expires]
        );
        setcookie(self::COOKIE, $token, [
            'expires'  => time() + self::LIFETIME,
            'path'     => '/',
            'secure'   => !empty($_SERVER['HTTPS']),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
        $_COOKIE[self::COOKIE] = $token;
    }

    public static function logout(): void
    {
        $token = (string) ($_COOKIE[self::COOKIE] ?? '');
        if ($token !== '') {
            Database::run('DELETE FROM user_sessions WHERE id = :id', [':id' => hash('sha256', $token)]);
        }
        setcookie(self::COOKIE, '', [
            'expires' => time() - 3600, 'path' => '/',
            'secure' => !empty($_SERVER['HTTPS']), 'httponly' => true, 'samesite' => 'Lax',
        ]);
        unset($_COOKIE[self::COOKIE]);
    }

    /** @return array{id:int,email:string,display_name:?string}|null */
    public static function currentUser(): ?array
    {
        static $cache = false;
        if ($cache !== false) return $cache;

        $token = (string) ($_COOKIE[self::COOKIE] ?? '');
        if ($token === '') return $cache = null;

        $row = Database::run(
            'SELECT u.id, u.email, u.display_name
               FROM user_sessions s
               JOIN users u ON u.id = s.user_id
              WHERE s.id = :id AND s.expires_at > :now',
            [':id' => hash('sha256', $token), ':now' => gmdate('Y-m-d H:i:s')]
        )->fetch();
        if (!$row) {
            // stale cookie — clear it
            setcookie(self::COOKIE, '', [
                'expires' => time() - 3600, 'path' => '/', 'secure' => !empty($_SERVER['HTTPS']),
                'httponly' => true, 'samesite' => 'Lax',
            ]);
            return $cache = null;
        }
        return $cache = [
            'id' => (int) $row['id'],
            'email' => (string) $row['email'],
            'display_name' => $row['display_name'],
        ];
    }

    /**
     * Move all guest-owned data onto a real user account. Called right after
     * login or signup so guests never lose their work when they create an
     * account.
     */
    public static function claimGuestData(string $guestOwner, int $userId): void
    {
        $userOwner = 'u:' . $userId;
        if ($guestOwner === '' || $guestOwner === $userOwner) return;

        // Place visits: insert with ON CONFLICT / IGNORE semantics across drivers
        $driver = Database::pdo()->getAttribute(\PDO::ATTR_DRIVER_NAME);
        $sql = $driver === 'sqlite'
            ? 'INSERT OR IGNORE INTO place_visits (owner, map_key, place_code, visited_on, notes, created_at)
                 SELECT :to, map_key, place_code, visited_on, notes, created_at FROM place_visits WHERE owner = :from'
            : 'INSERT IGNORE INTO place_visits (owner, map_key, place_code, visited_on, notes, created_at)
                 SELECT :to, map_key, place_code, visited_on, notes, created_at FROM place_visits WHERE owner = :from';
        Database::run($sql, [':to' => $userOwner, ':from' => $guestOwner]);
        Database::run('DELETE FROM place_visits WHERE owner = :from', [':from' => $guestOwner]);

        // Trips
        Database::run('UPDATE trips SET user_id = :to WHERE user_id = :from',
            [':to' => $userOwner, ':from' => $guestOwner]);
    }

    private static function normaliseEmail(string $email): string
    {
        return strtolower(trim($email));
    }
}
