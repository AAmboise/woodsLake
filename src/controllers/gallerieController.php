<?php
        require_once './src/models/models.php';
        require_once './src/database/database.php';
        require_once './src/database/GallerieDataBase.php';
        require_once './src/database/PhotoDataBase.php';

        session_start();
        $titre="La gallerie";
        $css= ' <link rel="stylesheet" href="./assets/css/style.css">';
        $menu= true;
        $header = true;
        $activeGallerie = 'active';
        $script ='';
        require_once './views/pages/gallerie.php';

    
?>