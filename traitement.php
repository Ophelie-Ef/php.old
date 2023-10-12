<?php
require './fonctions.php';

// dbug($_GET);
// dbug($_POST);
// dbug($_SERVER);
// dbug($_REQUEST);
dbug(htmlspecialchars($_GET['nom'])); //htmlspecialchars permet de ne peas effectuer les scripts rajoutés par les petits malins dans la barre d'adresse.


// if (isset($_POST['submitted'])):
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    echo ('Votre nom est : ' . $_POST['nom'] . '.');
    echo ('<br>' . 'Votre adresse email est : ' . $_POST['email'] . '.');
    echo ('<br>' . 'Vous avez un niveau ' . $_POST['niveau']);
    echo ('<br>' . 'Vous nous avez suggeré : ' . $_POST['commentaire']);
    echo ('<br>' . 'Votre/vos compétence(s) est/sont : ' . implode(", ", $_POST['competence']));
endif;
