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


function calcul($a , $b=12)
{
    // // echo 'Calcul';
    // $c = $a+$b;
    // return $c;
    return $a + $b;
};

echo calcul(10);
