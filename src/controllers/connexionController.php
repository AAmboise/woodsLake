<?php
    namespace Src\Controllers;
    use Src\Database\UserDataBase;
    require_once '../src/Ajax/ajax.php';

    session_start();
    $titre = "Connexion";
    $css = '<link rel="stylesheet" href="../assets/css/style.css">';
    $menu = true;
    $header = true;
    $script = '<script type="text/javascript" src="../assets/js/connexion.js"></script>';
    $alerte = '';
    
    
    if (!empty($_POST['email']) && !empty($_POST['password'])){

        $passwordHash = hash("sha256", $_POST['password'], false);
        $userConnected = UserDataBase::checkLogin($_POST['email']);      
        
        if ($userConnected == true) { // si l'utilisateur est reconnu dans la BDD, on creer la session
            if ($userConnected->password == $passwordHash){

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
    }



    
    require_once '../views/pages/connexion.php';
    ?>