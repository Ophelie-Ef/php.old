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


foreach ($planetes as $planete) {
    echo ucwords($planete) . '<br>';
}

?>

</body>
</html>

<!-- If you understand this :"999 666 88 00 22 777 33 00 666 555 3", then it's as it says ^^  -->