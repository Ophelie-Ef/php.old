<?php

// phpinfo(); //affiche les infos

require './fonctions.php';

$titre = 'Opérateurs PHP';

$x = 4;

$y = 2;

$z = 5;

/* 

Opérateurs :
+ //addition
- //soustraction
* //multiplication
/ //division
** //exposant (aka puissance)
% //modulo (reste de la division)

*/

$calcul = $x % $y;

dd($calcul);

require './index.vue.php';
