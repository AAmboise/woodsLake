
<?php
    session_start();

        unset( $_SESSION['id']);
        unset( $_SESSION['isAdmin']);
        unset( $_SESSION['prenom']);
        unset( $_SESSION['nom']);
        unset( $_SESSION['email']);
        unset( $_SESSION['telephone']);
  
        header('location: /accueil');

?>