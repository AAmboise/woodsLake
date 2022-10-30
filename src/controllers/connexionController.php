<?php
    namespace Src\Controllers;
    use Src\Database\UserDataBase;
    use Src\Functions\Functions;
    require_once '../src/Ajax/ajax.php'; // On met à jour le fichier listeEmail.json

    session_start();
    $titre = "Connexion";
    $css = '<link rel="stylesheet" href="../assets/css/style.css">';
    $menu = true;
    $header = Functions::check_carousel();
    $script = '<script type="text/javascript" src="../assets/js/connexion.js"></script>';
    $alerte = '';
    
    
    if (!empty($_POST['email']) && !empty($_POST['password'])){

        // Sécurité contre les attaques XSS
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $passwordHash = hash("sha256", $password, false);
        $userConnected = UserDataBase::checkLogin($email);      
        
        if ($userConnected == true && $userConnected->password == $passwordHash) { // si l'utilisateur est reconnu dans la BDDet que le mot de passe est bon, on creer la session
            $_SESSION['id']= $userConnected->getId();
            $_SESSION['isAdmin']= $userConnected->getIsAdmin();
            $_SESSION['prenom']= $userConnected->prenom;
            $_SESSION['nom']= $userConnected->nom;
            $_SESSION['email']= $userConnected->email;
            $_SESSION['telephone']= $userConnected->telephone;
            
            header('location: /accueil');   
        }
        header('location:/login');
    }

    require_once '../views/pages/connexion.php';
    ?>