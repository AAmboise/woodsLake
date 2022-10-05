<?php
    require_once './src/models/models.php';
    require_once './src/database/UserDataBase.php';
    require_once './src/database/database.php';

    session_start();
    $titre = "Mon compte";
    $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = false;
    $script = '<script type="text/javascript" src="../assets/js/compte.js"></script>';
    $alerte = '';
    
    
    



    
    require_once './views/pages/compte.php';
    ?>