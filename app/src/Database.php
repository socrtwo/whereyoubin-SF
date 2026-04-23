<?php
declare(strict_types=1);

namespace TravelLog;

use PDO;
use RuntimeException;

/**
 * Break-immune database layer. Supports SQLite (default, zero-config, great for
 * desktop/PWA offline use) and MySQL/MariaDB (shared hosting parity with the
 * legacy map tool). Uses prepared statements everywhere.
 */
final class Database
{
    private static ?PDO $pdo = null;

    public static function pdo(): PDO
    {
        if (self::$pdo instanceof PDO) {
            return self::$pdo;
        }

        $driver = getenv('TRAVELLOG_DRIVER') ?: 'sqlite';

        if ($driver === 'mysql'
            && \defined('MYSQL_HOST') && \defined('MYSQL_DB')
            && \defined('MYSQL_USER') && \defined('MYSQL_PASS')) {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', MYSQL_HOST, MYSQL_DB);
            self::$pdo = new PDO($dsn, MYSQL_USER, MYSQL_PASS, self::options());
        } else {
            $path = __DIR__ . '/../data/travellog.sqlite';
            if (!is_dir(\dirname($path))) {
                mkdir(\dirname($path), 0775, true);
            }
            self::$pdo = new PDO('sqlite:' . $path, null, null, self::options());
            self::$pdo->exec('PRAGMA foreign_keys = ON');
            self::$pdo->exec('PRAGMA journal_mode = WAL');
        }

        self::migrate(self::$pdo);
        return self::$pdo;
    }

    private static function options(): array
    {
        return [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    }

    private static function migrate(PDO $pdo): void
    {
        $isSqlite = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) === 'sqlite';
        $pk = $isSqlite ? 'INTEGER PRIMARY KEY AUTOINCREMENT' : 'BIGINT PRIMARY KEY AUTO_INCREMENT';
        $ts = $isSqlite ? "DATETIME DEFAULT CURRENT_TIMESTAMP" : "TIMESTAMP DEFAULT CURRENT_TIMESTAMP";
        $pdo->exec("CREATE TABLE IF NOT EXISTS trips (
            id          $pk,
            user_id     VARCHAR(64) NOT NULL DEFAULT 'local',
            title       VARCHAR(255) NOT NULL,
            country     VARCHAR(2)  DEFAULT NULL,
            location    VARCHAR(255) DEFAULT NULL,
            latitude    REAL DEFAULT NULL,
            longitude   REAL DEFAULT NULL,
            visited_on  DATE DEFAULT NULL,
            rating      SMALLINT DEFAULT 0,
            notes       TEXT,
            photo_path  VARCHAR(500) DEFAULT NULL,
            created_at  $ts
        )");

        $pdo->exec("CREATE TABLE IF NOT EXISTS users (
            id             $pk,
            email          VARCHAR(255) NOT NULL,
            password_hash  VARCHAR(255) NOT NULL,
            display_name   VARCHAR(255) DEFAULT NULL,
            created_at     $ts
        )");
        // Cross-driver unique index (MySQL ignores IF NOT EXISTS on indexes pre-8, so wrap in try)
        try { $pdo->exec('CREATE UNIQUE INDEX ux_users_email ON users(email)'); } catch (\Throwable) {}

        $pdo->exec("CREATE TABLE IF NOT EXISTS user_sessions (
            id           VARCHAR(64) PRIMARY KEY,
            user_id      BIGINT NOT NULL,
            created_at   $ts,
            expires_at   DATETIME NOT NULL
        )");
        try { $pdo->exec('CREATE INDEX ix_user_sessions_uid ON user_sessions(user_id)'); } catch (\Throwable) {}

        $pdo->exec("CREATE TABLE IF NOT EXISTS place_visits (
            id           $pk,
            owner        VARCHAR(80) NOT NULL,
            map_key      VARCHAR(32) NOT NULL,
            place_code   VARCHAR(16) NOT NULL,
            visited_on   DATE DEFAULT NULL,
            notes        TEXT,
            created_at   $ts
        )");
        try { $pdo->exec('CREATE UNIQUE INDEX ux_place_visits ON place_visits(owner, map_key, place_code)'); } catch (\Throwable) {}
        try { $pdo->exec('CREATE INDEX ix_place_visits_owner ON place_visits(owner)'); } catch (\Throwable) {}
    }

    /** @param array<string, mixed> $params */
    public static function run(string $sql, array $params = []): \PDOStatement
    {
        $stmt = self::pdo()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
