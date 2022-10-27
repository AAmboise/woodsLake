<?php
namespace Src\Controllers;

session_start();
$titre = "Accueil";
$css = '<link rel="stylesheet" href="./assets/css/style.css">';
$menu = true;
$header = true;
$activeAccueil = 'active';
$script = '<script type="text/javascript" src="../assets/js/accueil.js"></script>';

require_once '../views/pages/accueil.php';
    
?>