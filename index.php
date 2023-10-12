<?php
require './fonctions.php';

//dd($_SERVER);
// dd($_SERVER['REQUEST_URI']);

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

dd($uri);


