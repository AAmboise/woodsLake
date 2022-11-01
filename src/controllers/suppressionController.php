<?php
    namespace Src\Controllers;
    use Src\Database\UserDataBase;

    session_start();

    UserDataBase::delete($_SESSION['id']); // on supprime le compte

    // on deconnecte le compte
    session_destroy();

    header('location: /accueil'); // on redirige vers la page d'accueil

?>