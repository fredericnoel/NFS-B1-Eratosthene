<?php

require_once './functions/generateArray.php';
require_once './functions/eratosthene.php';

if (isset($_POST['frmFormArray'])) {
    $n = isset($_POST['valeur']) ? $_POST['valeur'] : '';
    $n = range(2, $n);

    $resultat = eratosthene($n);
}

else {
    require './includes/frmFormArray.php';
}
