<?php

function isPath($path)
{
    return $_SERVER['REQUEST_URI'] === $path;
}
