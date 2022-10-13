<?php
        namespace Src\Controllers;

        session_start();
        $titre="La gallerie";
        $css= ' <link rel="stylesheet" href="./assets/css/style.css">';
        $menu= true;
        $header = true;
        $activeGallerie = 'active';
        $script ='';
        require_once './views/pages/gallerie.php';

    
?>