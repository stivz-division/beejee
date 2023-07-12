<?php

declare(strict_types=1);

function strip(string $str)
{
    $str = strip_tags($str);
    $str = stripslashes($str);

    return $str;
}