<?php

// phpinfo(); //affiche les infos

require './fonctions.php';

$titre = 'Opérateurs PHP';

/* 

Opérateurs :
+ //addition
- //soustraction
* //multiplication
/ //division
** //exposant (aka puissance)
% //modulo (reste de la division)

*/

// $calcul = $x + $z * $y;


$x = 4;

$y = 2;

$z = 5;



//php respecte les règles des priorités de calculs en maths. Si on veut imposer un ordre de calcul, comme en maths, on ajoute des parenthèses

//Simplification de calculs :

//$x += 5; //$x = $x + 5;
//$x -= 5; //$x = $x - 5;
//$x *= 5; //$x = $x * 5;
//$x /= 5; //$x = $x / 5;
//$x **= 5; //$x = $x ** 5;
//$x %= 5; //$x = $x % 5;


$i = 0;

// $i++; // $i = $i + 1;

// $i--; // $i = $i - 1;


dd($i);

require './index.vue.php';
