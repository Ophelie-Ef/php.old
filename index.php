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

$fruits = [
    //'clef' => 'valeur',
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert'
];

// // dd($fruits['pomme']);

$fruits['poire'] = 'caca d\'oie';

// dd($fruits);

// $chaine = implode(",",$fruits);

// dd($chaine);



require './index.vue.php';