<?php
require './fonctions.php';

$titre = "Condtions";

$user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competence' => ['php','react','python']
];

// if/else/elseif
/*
>
<
>=
<=
==
===
!=
!==
*/

$age = 20;
// if($age >= 18) {
//     echo 'Peut voter.';
// } else {
//     echo 'Ne peut pas voter !';
// }


if($age >= 18) :
    echo 'Peut voter.';
else:
    echo 'Ne peut pas voter !';
endif;

// require './index.view.php';