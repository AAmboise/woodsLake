<?php
    namespace Src\Controllers;
    use Src\Database\UserDataBase;
    use Src\Models\User;
    use Src\Functions\Functions;

    session_start();
    $titre = "Connexion";
    $css = '<link rel="stylesheet" href="../assets/css/style.css">';
    $menu = true;
    $header = Functions::check_carousel();
    $script = '<script type="text/javascript" src="../assets/js/inscription.js"></script>';
    $alerte = '';




    if( !empty($_POST['nom'])       && 
        !empty($_POST['prenom'])    && 
        !empty($_POST['email'])     && 
        !empty($_POST['telephone']) && 
        !empty($_POST['password'])  && 
        !empty($_POST['password2'])
        ){ // tous les champs sont remplis
            
            // Sécurité contre les attaques XSS
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $password = htmlspecialchars($_POST['password']);
            $password2 = htmlspecialchars($_POST['password2']);

        if($password == $password2){ // passwords identique
            if(preg_match('`[0-9]{10}`',str_replace(' ','',$telephone))){ // verifie le format telephonne
                $unique = UserDataBase::checkemail($email);
                if($unique){ // on vérifie que l'email n'existe pas
                    $passwordHash = hash("sha256", $password, false);
                    $user = new User(null, strtoupper($nom),ucwords($prenom),$email,str_replace(' ','',$telephone),$passwordHash,0);
                    UserDataBase::create($user);
                    header('location: /connexion');
                }
            }
            
        }
        
    }

    require_once '../views/pages/inscription.php';
?>

