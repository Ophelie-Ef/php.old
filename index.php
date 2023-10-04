<?php

// "include './header.php';" équivaut strictement à "include('./header.php');"
require './fonctions.php';
require './header.php'; //contrairement à include, require arrête le code en présence d'erreur

//Un commentaire sur une seule ligne

/* Commentaire sur
plusieurs lignes*/

// echo "<h1>Cours PHP</h1>";

$variable = 'une variable quelconque, ici une chaîne de caractères';
$Variable = 'Une Autre Variable';

//Attention à la casse

//echo $variable , $Variable; //On utilise rarement la virgule, et on lui préfère le point.
// echo $variable . " " . $Variable; //  . " " . rajouté pour créer l'espace entre les deux variables à l'affichage 

$camelCase = 'une variable en camel case'; //ou lowerCamelCase
$snake_case = 'une variable en snake case';
$PascalCase = 'une variable en Pascal case'; //ou UpperCamelCase
// $kebab-case = 'une variable en kebab case'; non utilisable en PHP

$nombre = 45;
$nombreDecimal = 10.5;
$boolean = false;

// print_r($nombre);
// var_dump($nombre);
// var_dump($nombreDecimal);
// var_dump($boolean);
// var_dump($variable);
// print_r($variable);

$fruit1 = 'pomme';
$fruit2 = 'banane'; //si on refait $fruit1 = 'banane'; à la place de $fruit2 = 'banane'; la valeur banane écrase la valeur pomme

// echo "<p>$fruit1<br>$fruit2</p>"; //echo '<p>$fruit1<br>$fruit2</p>'; ne fonctionne pas !
// echo "<p>$fruit1"."<br>"."$fruit2</p>";
// echo '<p>' . $fruit1 .'<br>'.$fruit2 .'</p>'; // <--- version prise de tête !!!

//Aujourd'hui il fait beau

// echo "Aujourd'hui il fait beau";
// echo 'Aujourd'hui il fait beau'; ne fonctionne pas sans échappement : \ (altgr+8)
// echo 'Aujourd\'hui il fait beau';

/*$resultat = '';
$resultat .= '<h1>';
$resultat .= 'Ceppic PHP';
$resultat .= '</h1>';
echo $resultat;*/

// echo $titre; //$titre a été déclarée dans header.php

//$tableau=array()

$tableau = [
    'groupe',
    23,
    4.5,
    false,
    [1, 2, 3]
];

// echo '<pre>';
// var_dump($tableau);
// echo '</pre>';

// echo '<pre>';
// print_r($tableau);
// echo '</pre>';

// dbug("Test");

dd($tableau);

dbug($titre);

?>
<!-- <h3><?//= $titre ?></h3> -->


<?php

require('./footer.php');

// echo $titre;
