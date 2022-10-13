<?php
require_once 'vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = $_SERVER['REQUEST_URI'];

// ROUTING PAGES
switch($path){
    case '/accueil':
        require_once 'src/Controllers/accueilController.php';
    break;
    case '/groupe':
        require_once 'src/Controllers/groupeController.php';
    break;
    case '/gallerie':
        require_once 'src/Controllers/gallerieController.php';
    break;
    case '/contact':
        require_once 'src/Controllers/contactController.php';
    break;
    case '/connexion':
        require_once 'src/Controllers/connexionController.php';
    break;
    case '/inscription':
        require_once 'src/Controllers/inscriptionController.php';
    break;
    case '/deconnexion':
        require_once 'src/Controllers/deconnexionController.php';
    break;
    case '/suppression':
        require_once 'src/Controllers/suppressionController.php';
    break;
    case '/compte':
        require_once 'src/Controllers/compteController.php';
    break;
    case '/administration':
        require_once 'src/Controllers/adminController.php';
    break;
    default:
    header('location:/accueil');
    break;
}