<?php

require './fonctions.php';

$titre = 'Boucle PHP';


// $planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];

// $planetes2 = [
//     "m" => 'mars',
//     't' => 'terre',
//     'u' => 'uranus',
//     'v' => 'venus',
//     'j' => 'jupiter',
//     'n' => 'mercure'
// ];

$user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupet@yaya.com',
    'competence' => ['PHP','React','Python']
];

//Dans l'index.view , afficher dans une ul toutes les données de ce user avec foreach


require './index.vue.php';
