<?php

class Vehicule
{
    public $couleur;
    public $nom = 'Jon Doe';

    function __construct()
    {
        echo 'Constructeur';
    }
    function freiner()
    {
        echo 'Crissement de freins'.'<br>';
    }
}

$voiture = new Vehicule();

// $voiture->freiner();

// echo $voiture->nom;
