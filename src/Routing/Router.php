<?php

declare(strict_types=1);

namespace Src\Routing;

final class Router
{

    /**
     * @return void
     */
    public static function boot()
    {
        static::requireRoute();

        $method = $_SERVER['REQUEST_METHOD'];

        $uri = static::getUri();

        $params = static::getParams();

        $route = static::searchRoute($method, $uri);

        if (is_null($route)) {
            exit('404');
        }

        call_user_func_array([new $route[0](), $route[1]], $params);
    }

    /**
     * @return void
     */
    private static function requireRoute()
    {
        require_once ROOT_DIR . '/routes/web.php';
    }

    /**
     * @param   string  $method
     * @param   string  $uri
     *
     * @return array|null
     */
    private static function searchRoute(string $method, string $uri): array|null
    {
        $routes = Route::$routes;

        if (isset($routes[strtolower($method)][$uri])) {
            return $routes[strtolower($method)][$uri];
        }

        return null;
    }

    private static function getUri(): string
    {
        if (count($_SERVER['argv'])) {
            return explode('?', $_SERVER['REQUEST_URI'])[0];
        }

        return $_SERVER['REQUEST_URI'];
    }

    private static function getParams(): array
    {
        $params = [];

        if ( ! str_contains($_SERVER['REQUEST_URI'], '?')) {
            return $params;
        }

        if (count($_SERVER['argv'])) {
            foreach ($_SERVER['argv'] as $arg) {
                parse_str($arg, $queryArray);
                foreach ($queryArray as $key => $value) {
                    $params[$key] = $value;
                }
            }
        }

        return $params;
    }

}