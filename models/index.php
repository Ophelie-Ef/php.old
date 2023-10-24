<?php

class Vehicule
{
    public $couleur;
    function freiner()
    {
        echo 'Crissement de freins';
    }
}

$voiture = new Vehicule();

$voiture->freiner();
