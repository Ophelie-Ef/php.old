<?php

class Vehicule
{
    public $couleur;
    public $nom = 'Panda';

    function __construct($nom)
    {
        echo $nom;
    }
    function freiner()
    {
        echo 'Crissement de freins'.'<br>';
    }
}

$voiture = new Vehicule('Twingo');

// $voiture->freiner();

// echo $voiture->nom;
