<?php

require 'config/routes.php';

$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];

// $urlToController = match($uriPath){
//     '/' =>  'controllers/index.php',
//     '/contact' => 'controllers/contact.php',
//     default => 'views/404.php'
// };

// require $urlToController;

// exit();

function urlToController($uriPath, $routes)
{
    if (array_key_exists($uriPath, $routes)) :
        require $routes[$uriPath];
    else :
        abort();
    endif;
}

function abort()
{
    http_response_code(404);
    require 'views/404.php';
    exit();
}

urlToController($uriPath, $routes);