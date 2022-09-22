<?php

function contact(){
    $titre="Nous contacter";
    $css= ' <link rel="stylesheet" href="./assets/css/style.css">';
    $menu= true;
    $activeContact = 'active';
    require_once './views/pages/contact.php';
}


function newMessage(){
    if (!isset($_POST['nom']) && !isset($_POST['prenom']) && !isset($_POST['email']) && !isset($_POST['message'])){
        if (validEmail($_POST['email'])){

            $sujet = 'WOODS LAKE : message de '. $_POST['nom']. ' ' . $_POST['prenom'];
            $message = 'Nom = '. $_POST['nom'].'</br> Prenom = '. $_POST['prenom']. '</br> E-mail ='.$_POST['email']. '</br> message ='.$_POST['message'];
            // $mail = mail('adrien.amboise@yahoo.fr', $sujet , $message);
            
            mail('adrien.amboise@yahoo.fr', $sujet , $message);
            echo "votre message a été envoyé";
        }
        else {
            echo "l'email n'est pas valide";
        }
    }
    else{ 
        echo "le message n'as pu être envoyé";
        var_dump($_POST['nom']);
        die;
            
    }
}
    
function validEmail($email){
    return (!preg_match('*^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^',$email)) ? false : true;
}  
    
?>