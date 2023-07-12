<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require_once __DIR__ . '/vendor/autoload.php';

define('ROOT_DIR', __DIR__);

try {
    $capsule = new Capsule();

    $capsule->addConnection([
      "driver"   => "mysql",
      "host"     => "database",
      "database" => "beejee",
      "username" => "beejee",
      "password" => "beejee",
    ]);

    $capsule->setAsGlobal();

    $capsule->bootEloquent();

    \Src\App::boot();
} catch (\ErrorException $e) {
    echo $e->getMessage();
}