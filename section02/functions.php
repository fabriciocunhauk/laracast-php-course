<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isPath($path)
{
    return $_SERVER['REQUEST_URI'] === $path;
}
