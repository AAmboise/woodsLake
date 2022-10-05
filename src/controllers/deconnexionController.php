
<?php
    session_start();

        unset( $_SESSION['isConnected']);
        unset( $_SESSION['id']);
        unset( $_SESSION['isAdmin']);
        unset( $_SESSION['prenom']);
        unset( $_SESSION['nom']);
  
        header('location: /accueil');

?>