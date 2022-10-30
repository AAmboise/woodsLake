<?php
namespace Src\Controllers;
use Src\Functions\Functions;

session_start();
$titre = "Accueil";
$css = '<link rel="stylesheet" href="./assets/css/style.css">';
$menu = true;
$header = Functions::check_carousel();
$activeAccueil = 'active';
$script = '<script type="text/javascript" src="../assets/js/accueil.js"></script>';
$slick = Functions::check_slick();

require_once '../views/pages/accueil.php';
    

?>