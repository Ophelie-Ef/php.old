<?php

require './fonctions.php';

$titre = 'Tableaux PHP';

//TABLEAUX INDEXES

// $tab1 = [ ];

// $notes = [12, 14, 6, 10 ];

// $tab1[] = 'Janvier';

// $tab1[] = 45;

// $tab1[] = true;

// array_push($tab1, 'Voiture', 10.5, [45, true, 'Truc']);

// $tabFusion = array_merge($tab1, $notes);

// dbug($tabFusion);

// dd($tabFusion[5][2]);

//TABLEAUX ASSOCIATIFS

// $fruits = [
//     //'clef' => 'valeur',
//     'banane' => 'jaune',
//     'pomme' => 'rouge',
//     'kiwi' => 'vert'
// ];

// // // dd($fruits['pomme']);

// $fruits['poire'] = 'caca d\'oie';

// // dd($fruits);

// $chaine = implode(",", $fruits);

// // dd($chaine);

// $fruits2 = explode(",", $chaine);

// dd($fruits2); //explode crée un tableau indexé à partir d'une chaîne de carctères ( scinde une chaîne de caractères en segments )

$planetes = ['mars','terre','uranus','venus','jupiter','mercure'];

$planetes2 =[
    "m"=> 'mars',
    't'=> 'terre',
    'u'=> 'uranus',
    'v'=> 'venus',
    'j'=> 'jupiter',
    'm'=> 'mercure'
];

dbug($planetes);
dbug($planetes2);

/*
sort
asort
rsot
ksort
arsort
krsort
*/


// require './index.vue.php';
