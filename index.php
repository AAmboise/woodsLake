<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// require_once '../src/controllers/controllers.php';
$path = $_SERVER['REQUEST_URI'];

// ROUTING PAGES
switch($path){
    case '/accueil':
        require_once 'src/controllers/accueilController.php';
    break;
    case '/groupe':
        require_once 'src/controllers/groupeController.php';
    break;
    case '/gallerie':
        require_once 'src/controllers/gallerieController.php';
    break;
    case '/contact':
        require_once 'src/controllers/contactController.php';
    break;
    default:
    header('location:/accueil');
    break;
}