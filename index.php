<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
    case '/connexion':
        require_once 'src/controllers/connexionController.php';
    break;
    case '/inscription':
        require_once 'src/controllers/inscriptionController.php';
    break;
    case '/deconnexion':
        require_once 'src/controllers/deconnexionController.php';
    break;
    case '/suppression':
        require_once 'src/controllers/suppressionController.php';
    break;
    case '/compte':
        require_once 'src/controllers/compteController.php';
    break;
    default:
    header('location:/accueil');
    break;
}