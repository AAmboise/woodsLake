<?php
    require_once './src/models/models.php';
    require_once './src/database/UserDataBase.php';
    require_once './src/database/database.php';
    require_once './src/ajax/ajax.php';

    session_start();
    $titre = "Mon compte";
    $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = false;
    $activeCompte = 'active';
    $script = '<script type="text/javascript" src="../assets/js/compte.js"></script>';
    $alerte = '';

    if(!empty($_POST)){
        if (!empty($_POST['nom'])){
            UserDataBase::update($_SESSION['id'],'nom',strtoupper($_POST['nom']));
            $_SESSION['nom'] = strtoupper($_POST['nom']);
        }
        if (!empty($_POST['prenom'])){
            UserDataBase::update($_SESSION['id'],'prenom',ucwords($_POST['prenom']));
            $_SESSION['prenom']= ucwords($_POST['prenom']);
        }
        if (!empty($_POST['email'])){ 
            $unique = UserDataBase::checkemail($_POST['email']);
            if($unique){ // on vérifie que l'email n'existe pas
                UserDataBase::update($_SESSION['id'],'email',$_POST['email']);
                $_SESSION['email']= $_POST['email'];
            }
        }
        if (!empty($_POST['telephone'])){
            $tel = str_replace(' ','',$_POST['telephone']);
            if(preg_match('`[0-9]{10}`',$tel)){ // verifie le format telephonne
                UserDataBase::update($_SESSION['id'],'telephone',$tel);
                $_SESSION['telephone']= $tel;
            }
        }
        if (!empty($_POST['password']) && !empty($_POST['password2'])){
            if($_POST['password'] == $_POST['password2']){ // passwords identique
                UserDataBase::update($_SESSION['id'],'password',$_POST['password']);
            }
        }
        header('location: /compte');
    }




    
        




    
    require_once './views/pages/compte.php';
    ?>