
<?php

    session_start();
        session_destroy();
        // unset( $_SESSION['id']);
        // unset( $_SESSION['isAdmin']);
        // unset( $_SESSION['prenom']);
        // unset( $_SESSION['nom']);
        // unset( $_SESSION['email']);
        // unset( $_SESSION['telephone']);
  
        header('location: /accueil');

?>