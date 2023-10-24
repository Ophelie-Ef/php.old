<?php

class Vehicule
{
    public $couleur;
    public $nom = 'Jon Doe';

    function freiner()
    {
        echo 'Crissement de freins'.'<br>';
    }
}

$voiture = new Vehicule();

$voiture->freiner();

echo $voiture->nom;
