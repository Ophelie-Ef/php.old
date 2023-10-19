<?php
require './fonctions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/php' => 'controllers/index.php',
    '/php/contact' => 'controllers/contact.php',
    '/php/notes' => 'controllers/notes.php'
];