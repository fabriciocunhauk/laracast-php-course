<?php
require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

$routes = [
    '/section02/index' => 'controllers/index.php',
    '/section02/about' => 'controllers/about.php',
    '/section02/contact' => 'controllers/contact.php',
];

function routesToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";

    die();
}

routesToController($uri, $routes);
