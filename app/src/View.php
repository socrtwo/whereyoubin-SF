<?php
declare(strict_types=1);

namespace TravelLog;

final class View
{
    /** @param array<string, mixed> $data */
    public static function render(string $template, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        $viewsDir = __DIR__ . '/../views';
        $file = $viewsDir . '/' . $template . '.php';
        if (!is_file($file)) {
            http_response_code(500);
            exit('Missing view: ' . htmlspecialchars($template));
        }
        include $viewsDir . '/layout.php';
    }

    public static function e(mixed $v): string
    {
        return htmlspecialchars((string)$v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
