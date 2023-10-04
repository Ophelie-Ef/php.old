<?php

require './fonctions.php';

$titre = 'Tableaux PHP';

$tab1 = [ ];

$notes = [12, 14, 6, 10 ];

$tab1[] = 'Janvier';

$tab1[] = 45;

$tab1[] = true;

$tabFusion = array_merge($tab1, $notes);

dd($tabFusion);

require './index.vue.php';