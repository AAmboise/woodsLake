<?php
        namespace Src\Controllers;
        use Src\Functions\Functions;

        session_start();
        $titre="La galerie";
        $css= ' <link rel="stylesheet" href="../assets/css/style.css">';
        $menu= true;
        $header = Functions::check_carousel();
        $activeGalerie = 'active';
        $script ='';
        require_once '../views/pages/galerie.php';

    
?>