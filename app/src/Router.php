<?php
declare(strict_types=1);

namespace TravelLog;

final class Router
{
    /** @var array<int, array{method:string, path:string, handler:callable}> */
    private array $routes = [];

    public function add(string $method, string $path, callable $handler): void
    {
        $this->routes[] = ['method' => strtoupper($method), 'path' => $path, 'handler' => $handler];
    }

    public function dispatch(string $method, string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';

        // SCRIPT_NAME is a mount-point hint (e.g. /subdir/index.php when the
        // app is deployed under a subdirectory). Derive a base prefix from it
        // ONLY if it actually looks like a PHP script path; under some PHP
        // built-in server versions (8.2 / 8.3), SCRIPT_NAME is set to the
        // request URI itself for URLs with non-default extensions (.json,
        // etc.), which would otherwise mangle base stripping and 404 valid
        // routes. A real mount prefix always ends in ".php".
        $scriptName = (string)($_SERVER['SCRIPT_NAME'] ?? '');
        $base = str_ends_with($scriptName, '.php') ? rtrim(dirname($scriptName), '/') : '';
        if ($base !== '' && str_starts_with($path, $base)) {
            $path = substr($path, strlen($base)) ?: '/';
        }

        foreach ($this->routes as $route) {
            if ($route['method'] !== strtoupper($method)) continue;
            $pattern = '#^' . preg_replace('#\{([^}]+)\}#', '(?P<$1>[^/]+)', $route['path']) . '$#';
            if (preg_match($pattern, $path, $m)) {
                $args = array_filter($m, static fn($k) => !is_int($k), ARRAY_FILTER_USE_KEY);
                ($route['handler'])($args);
                return;
            }
        }
        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
    }
}
