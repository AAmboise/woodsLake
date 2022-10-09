<?php
namespace src\controllers;

use src\models\User;
require_once './src/models/models.php';
require_once './src/database/ExtraitDataBase.php';
require_once './src/database/ConcertDataBase.php';
require_once './src/database/database.php';

session_start();
$titre = "Accueil";
$css = '<link rel="stylesheet" href="./assets/css/style.css">';
$menu = true;
$header = true;
$activeAccueil = 'active';
$script = '<script type="text/javascript" src="../assets/js/accueil.js"></script>';

require_once './views/pages/accueil.php';
    


?>