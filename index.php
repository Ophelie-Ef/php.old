<?php
require './fonctions.php';

// $titre = "Condtions";

// $user = [
//     'nom' => 'Doupet Lucien',
//     'email' => 'ldoupe@yaya.com',
//     'competence' => ['php','react','python']
// ];

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


// if($age >= 18) :
//     echo 'Peut voter.';
// else:
//     echo 'Ne peut pas voter !';
// endif;


// $heure = 19;
$heure = date('H');

// dd($heure);

// if ($heure <= 12) :
//     echo 'On est le matin';

// elseif ($heure >= 18) :
//     echo 'On est le soir';
// else :
//     echo 'On est l\'après-midi !';
// endif;


// $a = 20;
// $b = '5';

// if ($b != 3) : //!= est le signe pour "différent de"
//     echo 'La variable $b n\'est pas égale à 3 !';
// endif;


// if ($b === 5) : //on a le retour non égale car le === induit une comparaison d'égalité en valeur et en type (== : juste en valeur)
//     echo 'La variable $b est égale à 5 !';
// else:
//     echo 'La variable n\'est pas égale à 5 !';
// endif;

// $vrai = true;
// $vrai = true;

// if($vrai):
//     echo 'Vrai';
// else :
//     echo 'Faux';
// endif;

// echo $vrai? 'Vrai' : 'False';

$votes = 7500;
$oldVotes = 1254;
dbug($votes);
($votes>$oldVotes) ? $votes-- : $votes++;
dbug($votes);

// require './index.view.php';