<?php

declare(strict_types=1);

namespace Src\Routing;

final class Route
{

    public static array $routes
      = [
        'get'  => [],
        'post' => [],
      ];

    public static function get(string $uri, array $callable): bool
    {
        return static::push('get', $uri, $callable);
    }

    public static function post(string $uri, array $callable): bool
    {
        return static::push('post', $uri, $callable);
    }

    public static function push(
      string $method,
      string $url,
      array $callable
    ): bool {
        static::$routes[$method][$url] = $callable;

        return true;
    }

}