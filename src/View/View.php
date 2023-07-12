<?php

declare(strict_types=1);

namespace Src\View;

final class View
{

    public static function render(string $view, array $params = []): void
    {
        ob_start();

        extract($params);

        require_once ROOT_DIR . '/view/' . $view . '.php';

        ob_end_flush();
    }

}