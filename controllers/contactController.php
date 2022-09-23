<?php

function contact(){
    $titre="Nous contacter";
    $css= ' <link rel="stylesheet" href="./assets/css/style.css">';
    $menu= true;
    $activeContact = 'active';
    require_once './views/pages/contact.php';
    
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["message"])){
        newMessage();
    }
    else{
        echo 'test';
    }
}



function newMessage(){
    $to = 'adrien.amboise@gmail.com';
    $sujet = 'WOODS LAKE : message de '. $_POST['nom']. ' ' . $_POST['prenom'];
    $message = ' E-mail :'.$_POST['email']. ' -------- Message : '.$_POST['message'];
    
    mail($to, $sujet , $message);
    echo "votre message a été envoyé";

}
    
  
    
?>