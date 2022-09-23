<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once './controllers/controllers.php';
$path = $_SERVER['REQUEST_URI'];

// ROUTING PAGES
switch($path){
    case '/accueil':
        accueil();
    break;
    case '/groupe':
        groupe();
    break;
    case '/gallerie':
        gallerie();
    break;
    case '/contact':
        contact();
    break;
    default:
    header('location:/accueil');
    break;
}