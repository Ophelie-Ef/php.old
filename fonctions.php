<?php

function dbug($value)
{
    echo '<pre style="background-color:black; color:yellowgreen; overflow:auto; padding:1rem; font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value) //dd pour debug and die
{
    dbug($value);
    die('Script PHP arrêté !!!');
}