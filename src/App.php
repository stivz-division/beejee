<?php

declare(strict_types=1);

namespace Src;

use Src\Routing\Router;

final class App
{

    public static function boot()
    {
        Router::boot();
    }

}