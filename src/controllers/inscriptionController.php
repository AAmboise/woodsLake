<?php

require_once './src/models/models.php';
require_once './src/database/UserDataBase.php';
require_once './src/database/database.php';
require_once './src/ajax/ajax.php'; 

session_start();
$titre = "Connexion";
$css = '<link rel="stylesheet" href="./assets/css/style.css">';
$menu = true;
$header = true;
$script = '<script type="text/javascript" src="../assets/js/inscription.js"></script>';
$alerte = '';


if( !empty($_POST['nom']) && 
!empty($_POST['prenom']) && 
    !empty($_POST['email']) && 
    !empty($_POST['telephone']) && 
    !empty($_POST['password']) && 
    !empty($_POST['password2'])
    ){ // tous les champs sont remplis

    if($_POST['password'] == $_POST['password2']){ // passwords identique
        if(preg_match('`[0-9]{10}`',str_replace(' ','',$_POST['telephone']))){ // verifie le format telephonne
            $unique = UserDataBase::checkemail($_POST['email']);
            if($unique){ // on vérifie que l'email n'existe pas
                $user = new User(null, strtoupper($_POST['nom']),ucwords($_POST['prenom']),$_POST['email'],str_replace(' ','',$_POST['telephone']),$_POST['password'],0);
                UserDataBase::create($user);
                header('location: /connexion');
            }
        }
        
    }
    
}

require_once './views/pages/inscription.php';
?>

