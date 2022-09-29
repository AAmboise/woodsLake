<?php

namespace src\controllers;

use src\models\User;

$titre = "Accueil";
$css = '<link rel="stylesheet" href="./assets/css/style.css">';
$menu = true;
$activeAccueil = 'active';
$script = '<script type="text/javascript" src="../assets/js/accueil.js"></script>';
require_once './views/pages/accueil.php';
    


?>