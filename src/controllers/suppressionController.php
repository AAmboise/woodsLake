<?php
    require_once './src/database/UserDataBase.php';
    require_once './src/database/database.php';
    session_start();

    UserDataBase::delete($_SESSION['id']); // on supprime le compte

    // on deconnecte le compte
    unset( $_SESSION['isConnected']);
    unset( $_SESSION['id']);
    unset( $_SESSION['isAdmin']);
    unset( $_SESSION['prenom']);
    unset( $_SESSION['nom']);
    unset( $_SESSION['email']);
    unset( $_SESSION['telephone']);

    header('location: /accueil'); // on redirige vers la page d'accueil

?>