<?php
require_once './src/models/models.php';
require_once './src/database/UserDataBase.php';
require_once './src/database/database.php';

$titre = "Connexion";
$css = '<link rel="stylesheet" href="./assets/css/style.css">';
$menu = true;
$header = true;
$script = '';
$alerte = '';
require_once './views/pages/inscription.php';


if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['password'])){
    $user = new User(null, $_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['password'],0);
    // var_dump($user);
    // die;
    UserDataBase::create($user);
}










?>

