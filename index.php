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

// $planetes = ['mars','terre','uranus','venus','jupiter','mercure'];

// $planetes2 =[
//     "m"=> 'mars',
//     't'=> 'terre',
//     'u'=> 'uranus',
//     'v'=> 'venus',
//     'j'=> 'jupiter',
//     'n'=> 'mercure'
// ];

// // dbug($planetes);
// // dbug($planetes2);

// /*
// sort
// asort
// rsot
// ksort
// arsort
// krsort
// */

// asort($planetes2);
// dd($planetes2);

// $tab = [];
// $tab[] = ['A', 'B', 'C'];
// $tab[] = ['Q','R','T'];
// $tab[] = ['E','U','P','I'];

// dbug($tab);

// $motab = [];
// $motab = [$tab[0][2], $tab[2][0], $tab[2][2], $tab[2][2], $tab[2][3], $tab[0][2]];

// $mot= implode("",$motab);

// dbug($mot);

// //correction

// dd($tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2]);

$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'cawa@wahoo.com'
];

$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludo@gimayle.com'
    ]
];


// Afficher les phrases suivantes :
// Le nom de Lucie est Dupond.
// L'email de Michel MOURAD est moumi@caramail.com.

dbug($people);

dbug('Le nom de ' . $people[2]['prenom'] . ' est ' . $people[2]['nom'] . '.');

dbug('L\'email de ' . $people[1]['prenom'] . " " . $people[1]['nom'] . ' est ' . $people[1]['email'] . '.');

// require './index.vue.php';
