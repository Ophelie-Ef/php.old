<?php

function dbug($value)
{
    echo '<pre style="background-color:black; color:yellowgreen; overflow:auto; padding:10px;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value) //dd pour debug and die
{
    dbug($value);
    die('Script PHP arrêté !!!');
}

// function calcul($a , $b)
// {
//     // // echo 'Calcul';
//     // $c = $a+$b;
//     // return $c;
//     return $a + $b;
// };
// echo calcul(10,12);


// function calcul($a , $b=12)
// {
//     // // echo 'Calcul';
//     // $c = $a+$b;
//     // return $c;
//     return $a + $b;
// };

// echo calcul(10);

//creer une fonction qui calcule le PVTTC en lui passant une PAHT et la TVA

// function calculPVTTC ($paht,$tva){
//     return $paht + $paht*$tva/100;
// }

// // echo calculPVTTC(34,20);

// //créer une fonction qui calcule l'âge en fonction de la date de naissance



// function calculAge ($birth){
//     $now = date('Y');
//     return $now - $birth;
// }

// echo calculAge(1987);

