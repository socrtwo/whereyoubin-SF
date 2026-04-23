<?php
declare(strict_types=1);

namespace TravelLog;

/**
 * Per-place visit toggles for the 12 regional maps. The `owner` column
 * holds either `u:<id>` (real account) or `g:<cookie>` (guest). A logged-in
 * user's data therefore survives cleared cookies, new browsers/computers,
 * and IP changes — it's keyed to the user, not the device.
 */
final class Visit
{
    /** @return array<string> place codes the owner has marked visited on this map */
    public static function visitedCodes(string $owner, string $mapKey): array
    {
        $rows = Database::run(
            'SELECT place_code FROM place_visits WHERE owner = :o AND map_key = :m',
            [':o' => $owner, ':m' => $mapKey]
        )->fetchAll();
        return array_map(static fn($r) => (string) $r['place_code'], $rows);
    }

    /** @param array<string> $codes desired final set of visited codes for this map */
    public static function setVisited(string $owner, string $mapKey, array $codes): void
    {
        $codes = array_values(array_unique(array_filter(array_map('strval', $codes), static fn($c) => $c !== '')));

        $pdo = Database::pdo();
        $pdo->beginTransaction();
        try {
            Database::run('DELETE FROM place_visits WHERE owner = :o AND map_key = :m',
                [':o' => $owner, ':m' => $mapKey]);
            if ($codes) {
                $stmt = $pdo->prepare(
                    'INSERT INTO place_visits (owner, map_key, place_code) VALUES (:o, :m, :c)'
                );
                foreach ($codes as $c) {
                    $stmt->execute([':o' => $owner, ':m' => $mapKey, ':c' => $c]);
                }
            }
            $pdo->commit();
        } catch (\Throwable $e) {
            $pdo->rollBack();
            throw $e;
        }
    }

    public static function toggle(string $owner, string $mapKey, string $code): bool
    {
        $exists = Database::run(
            'SELECT 1 FROM place_visits WHERE owner = :o AND map_key = :m AND place_code = :c',
            [':o' => $owner, ':m' => $mapKey, ':c' => $code]
        )->fetchColumn();

        if ($exists) {
            Database::run(
                'DELETE FROM place_visits WHERE owner = :o AND map_key = :m AND place_code = :c',
                [':o' => $owner, ':m' => $mapKey, ':c' => $code]
            );
            return false;
        }
        Database::run(
            'INSERT INTO place_visits (owner, map_key, place_code) VALUES (:o, :m, :c)',
            [':o' => $owner, ':m' => $mapKey, ':c' => $code]
        );
        return true;
    }

    /** @return array<string,int> map_key => count */
    public static function countsByMap(string $owner): array
    {
        $rows = Database::run(
            'SELECT map_key, COUNT(*) AS n FROM place_visits WHERE owner = :o GROUP BY map_key',
            [':o' => $owner]
        )->fetchAll();
        $out = [];
        foreach ($rows as $r) $out[(string) $r['map_key']] = (int) $r['n'];
        return $out;
    }
}
