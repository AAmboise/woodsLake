<?php
        namespace Src\Controllers;
        use Src\Functions\Functions;

        session_start();
        $titre="La gallerie";
        $css= ' <link rel="stylesheet" href="../assets/css/style.css">';
        $menu= true;
        $header = Functions::check_carousel();
        $activeGallerie = 'active';
        $script ='';
        require_once '../views/pages/gallerie.php';

    
?>