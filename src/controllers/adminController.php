<?php
    require_once './src/models/models.php';
    require_once './src/database/database.php';
    require_once './src/database/UserDataBase.php';
    require_once './src/database/ExtraitDataBase.php';
    require_once './src/database/ConcertDataBase.php';
    require_once './src/database/GallerieDataBase.php';
    require_once './src/database/PhotoDataBase.php';

    session_start();
    $titre = "Administration";
    $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = false;
    $script = '<script type="text/javascript" src="../assets/js/panel_admin.js"></script>';
    $alerte = '';
    
    
    



    
    require_once './views/pages/admin.php';
    ?>