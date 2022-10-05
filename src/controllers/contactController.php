<?php

    session_start();
    $titre="Nous contacter";
    $css = ' <link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = true;
    $activeContact = 'active';
    $script ='';
    $alerte = '';

    require_once './views/pages/contact.php';
    
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["telephone"]) && !empty($_POST["email"]) && !empty($_POST["message"])){
        newMessage();
        $alerte = 'Message envoyé !';

    }
    else{
        $alerte = 'Votre message n\'as pas pu être envoyé. veuillez contacter l\'administrateur';

        die;
    }




function newMessage(){
    $to = 'adrien.amboise@gmail.com';
    $sujet = 'WOODS LAKE : message de '. $_POST['nom']. ' ' . $_POST['prenom'];
    $message = ' E-mail :'.$_POST['email']. ' -------- Telephone : '.$_POST['telephone']. ' -------- Message : '.$_POST['message'];
    mail($to, $sujet , $message);
}
    
  
    
?>