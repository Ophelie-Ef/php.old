<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>


<body>

    <h1><?= $titre ?></h1>


    <?php


    // foreach ($planetes as $planete) {
    //     echo ucwords($planete) . '<br>';
    // }

    // foreach ($planetes2 as $planet) {
    //     echo ucwords($planet) . '<br>';
    // }

    // foreach ($planetes as $clef => $valeur) {
    //     echo $clef . ' : ' . $valeur . '<br>';
    // }

    // echo '<hr>';

    // foreach ($planetes2 as $clef => $valeur) {
    //     echo $clef . ' : ' . $valeur . '<br>';
    // }

    // echo '<hr>';

    // foreach ($planetes2 as $clef => $valeur) :
    //     echo $clef . ' : ' . $valeur . '<br>';
    // endforeach

    dbug($user);

    foreach ($user as $key => $value) :
        echo $key . ' : ' . $value;
    endforeach; //bug car on passe d'une chaine à un tableau au moment de passer aux compétences

    ?>

</body>

</html>

<!-- If you understand this :"999 666 88 00 22 777 33 00 666 555 3", then it's as it says ^^  -->