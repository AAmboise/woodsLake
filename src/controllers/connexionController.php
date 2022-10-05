<?php
    require_once './src/models/models.php';
    require_once './src/database/UserDataBase.php';
    require_once './src/database/database.php';

    session_start();
    $titre = "Connexion";
    $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = true;
    $script = '';
    $alerte = '';
    
    
    if (!empty($_POST['email']) && !empty($_POST['password'])){

        $userConnected = UserDataBase::checkLogin($_POST['email'],$_POST['password']);
        
        if ($userConnected == true) { // si l'utilisateur est reconnu dans la BDD, on creer la session

            $_SESSION['isConnected']=true;
            $_SESSION['id']= $userConnected->getId();
            $_SESSION['isAdmin']= $userConnected->getIsAdmin();
            $_SESSION['prenom']= $userConnected->prenom;
            $_SESSION['nom']= $userConnected->nom;
            $_SESSION['email']= $userConnected->email;
            $_SESSION['telephone']= $userConnected->telephone;

            header('location: /accueil');   
        }
    }



    
    require_once './views/pages/connexion.php';
    ?>