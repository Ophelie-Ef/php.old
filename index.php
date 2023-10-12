<?php
require './fonctions.php';

//dd($_SERVER);
// dd($_SERVER['REQUEST_URI']);

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

if ($uri === '/php/'):
    echo 'Je suis à la racine de mon dossier de travail.';
elseif ($uri ==='php/contact/'):
    echo 'contact.php';
endif;
