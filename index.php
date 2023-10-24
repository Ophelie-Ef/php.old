<?php
require './fonctions.php';


$uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/php' => 'controllers/index.php',
    '/php/contact' => 'controllers/contact.php',
    '/php/notes' => 'controllers/notes.php'
];

$urlToController = match($uriPath){
    '/' =>  'controllers/index.php',
    '/contact' => 'controllers/contact.php'
};

require $urlToController;

exit();