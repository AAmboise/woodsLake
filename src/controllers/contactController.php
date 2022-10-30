<?php
    namespace Src\Controllers;
    use Src\Functions\Functions;
    
    session_start();
    $titre="Nous contacter";
    $css = ' <link rel="stylesheet" href="../assets/css/style.css">';
    $menu = true;
    $header = Functions::check_carousel();
    $activeContact = 'active';
    $script ='';
    $alerte = '';

    require_once '../views/pages/contact.php';
    
    if (    !empty($_POST["nom"])       && 
            !empty($_POST["prenom"])    && 
            !empty($_POST["telephone"]) && 
            !empty($_POST["email"])     && 
            !empty($_POST["message"])
    ){
        // Sécurité contre les attaques XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $message = htmlspecialchars($_POST['message']);
        
        
        Functions::newMessage($nom, $prenom, $email, $telephone, $message);
        $alerte = 'Message envoyé !';

    }
    else{
        $alerte = 'Votre message n\'as pas pu être envoyé. veuillez contacter l\'administrateur';

        die;
    }





    
  
    
?>