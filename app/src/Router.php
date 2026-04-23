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
        $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
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
