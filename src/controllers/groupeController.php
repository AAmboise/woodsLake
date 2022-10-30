<?php
        namespace Src\Controllers;
        use Src\Functions\Functions;

        session_start();
        $titre="Le groupe";
        $css= ' <link rel="stylesheet" href="../assets/css/style.css">';
        $menu= true;
        $header = Functions::check_carousel();
        $activeGroupe = 'active';
        $script ='';
        require_once '../views/pages/groupe.php';

    
?>