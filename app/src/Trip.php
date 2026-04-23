<?php
declare(strict_types=1);

namespace TravelLog;

final class Trip
{
    /** @return array<int, array<string, mixed>> */
    public static function all(string $userId = 'local'): array
    {
        return Database::run(
            'SELECT * FROM trips WHERE user_id = :u ORDER BY visited_on DESC, id DESC',
            [':u' => $userId]
        )->fetchAll();
    }

    /** @return array<string, mixed>|null */
    public static function find(int $id, string $userId = 'local'): ?array
    {
        $row = Database::run(
            'SELECT * FROM trips WHERE id = :id AND user_id = :u',
            [':id' => $id, ':u' => $userId]
        )->fetch();
        return $row ?: null;
    }

    /** @param array<string, mixed> $data */
    public static function create(array $data, string $userId = 'local'): int
    {
        Database::run(
            'INSERT INTO trips (user_id, title, country, location, latitude, longitude, visited_on, rating, notes, photo_path)
             VALUES (:u, :t, :c, :l, :lat, :lng, :d, :r, :n, :p)',
            [
                ':u'   => $userId,
                ':t'   => (string)$data['title'],
                ':c'   => self::nullIfEmpty($data['country'] ?? null),
                ':l'   => self::nullIfEmpty($data['location'] ?? null),
                ':lat' => self::floatOrNull($data['latitude'] ?? null),
                ':lng' => self::floatOrNull($data['longitude'] ?? null),
                ':d'   => self::nullIfEmpty($data['visited_on'] ?? null),
                ':r'   => (int)($data['rating'] ?? 0),
                ':n'   => (string)($data['notes'] ?? ''),
                ':p'   => self::nullIfEmpty($data['photo_path'] ?? null),
            ]
        );
        return (int)Database::pdo()->lastInsertId();
    }

    /** @param array<string, mixed> $data */
    public static function update(int $id, array $data, string $userId = 'local'): void
    {
        Database::run(
            'UPDATE trips SET title = :t, country = :c, location = :l, latitude = :lat, longitude = :lng,
             visited_on = :d, rating = :r, notes = :n, photo_path = COALESCE(:p, photo_path)
             WHERE id = :id AND user_id = :u',
            [
                ':id'  => $id,
                ':u'   => $userId,
                ':t'   => (string)$data['title'],
                ':c'   => self::nullIfEmpty($data['country'] ?? null),
                ':l'   => self::nullIfEmpty($data['location'] ?? null),
                ':lat' => self::floatOrNull($data['latitude'] ?? null),
                ':lng' => self::floatOrNull($data['longitude'] ?? null),
                ':d'   => self::nullIfEmpty($data['visited_on'] ?? null),
                ':r'   => (int)($data['rating'] ?? 0),
                ':n'   => (string)($data['notes'] ?? ''),
                ':p'   => self::nullIfEmpty($data['photo_path'] ?? null),
            ]
        );
    }

    public static function delete(int $id, string $userId = 'local'): void
    {
        Database::run('DELETE FROM trips WHERE id = :id AND user_id = :u', [':id' => $id, ':u' => $userId]);
    }

    /** @return array{trips:int, countries:int, first:?string, last:?string, ratingAvg:float} */
    public static function stats(string $userId = 'local'): array
    {
        $row = Database::run(
            'SELECT COUNT(*) AS trips,
                    COUNT(DISTINCT country) AS countries,
                    MIN(visited_on) AS first,
                    MAX(visited_on) AS last,
                    COALESCE(AVG(rating), 0) AS avg_rating
             FROM trips WHERE user_id = :u',
            [':u' => $userId]
        )->fetch();
        return [
            'trips'     => (int)($row['trips'] ?? 0),
            'countries' => (int)($row['countries'] ?? 0),
            'first'     => $row['first'] ?? null,
            'last'      => $row['last'] ?? null,
            'ratingAvg' => (float)($row['avg_rating'] ?? 0),
        ];
    }

    private static function nullIfEmpty(mixed $v): ?string
    {
        if ($v === null) return null;
        $v = trim((string)$v);
        return $v === '' ? null : $v;
    }

    private static function floatOrNull(mixed $v): ?float
    {
        if ($v === null || $v === '' || !is_numeric($v)) return null;
        return (float)$v;
    }
}
