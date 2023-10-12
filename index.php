<?php
require './fonctions.php'; 

dbug($_POST);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>


<body>

    <h1>Formulaire</h1>

    <form action="" method="post">

        <label for="nom"> Nom :</label>

        <input type="text" name="nom">

        <label for="eamil">e-mail :</label>

        <input type="eamil" name="email">

        <input type="submit" value="Valider">

    </form>

</body>


</html>