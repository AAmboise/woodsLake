<?php

    function accueil(){
        $titre = "Accueil";
        $css = '<link rel="stylesheet" href="./assets/css/style.css">';
        $menu = true;
        $activeAccueil = 'active';
        require_once './views/pages/accueil.php';
    }
?>