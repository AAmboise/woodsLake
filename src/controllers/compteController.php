<?php
    namespace Src\Controllers;
    use Src\Database\UserDataBase;

    session_start();
    $titre = "Mon compte";
    $css = '<link rel="stylesheet" href="../assets/css/style.css">';
    $menu = true;
    $header = false;
    $activeCompte = 'active';
    $script = '<script type="text/javascript" src="../assets/js/compte.js"></script>';
    $alerte = '';

   

    if(!empty($_POST)){
        
        // Sécurité contre les attaques XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);

        if (!empty($_POST['nom'])){
            UserDataBase::update($_SESSION['id'],'nom',strtoupper($nom));
            $_SESSION['nom'] = strtoupper($nom);
        }
        if (!empty($_POST['prenom'])){
            UserDataBase::update($_SESSION['id'],'prenom',ucwords($prenom));
            $_SESSION['prenom']= ucwords($prenom);
        }
        if (!empty($_POST['email'])){ 
            $unique = UserDataBase::checkemail($email);
            if($unique){ // on vérifie que l'email n'existe pas
                UserDataBase::update($_SESSION['id'],'email',$email);
                $_SESSION['email']= $email;
            }
        }
        if (!empty($_POST['telephone'])){
            $tel = str_replace(' ','',$telephone);
            if(preg_match('`[0-9]{10}`',$tel)){ // verifie le format telephonne
                UserDataBase::update($_SESSION['id'],'telephone',$tel);
                $_SESSION['telephone']= $tel;
            }
        }
        if (!empty($_POST['password']) && !empty($_POST['password2'])){
            if($password == $password2){ // passwords identique
                $passwordHash = hash("sha256", $password, false);
                UserDataBase::update($_SESSION['id'], 'password', $passwordHash);
            }
        }
        header('location: /compte');
    }




    
        




    
    require_once '../views/pages/compte.php';
    ?>