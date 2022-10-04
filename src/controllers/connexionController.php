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
    require_once './views/pages/connexion.php';
    
    
    
    if (!empty($_POST['email']) && !empty($_POST['password'])){

        $userConnected = checkLogin($_POST['email'],$_POST['password']);

        if ($userConnected) { // si l'utilisateur est reconnu dans la BDD, on creer la session

            $_SESSION['isConnected']=true;
            $_SESSION['userID']= $userConnected->getId();
            $_SESSION['isAdmin']= $userConnected->getIsAdmin();
            $_SESSION['prenom']= $userConnected->prenom;
            $_SESSION['nom']= $userConnected->nom;
            
            // header('/accueil'); REDIRECTION VERS LA PAGE D'ACCUEIL
            
        }
        else { // si l'utilisateur n'est pas reconnu dans la BDD
            echo 'Email ou mot de passe erroné';
        }
    }
    // else { // si tous les champs ne sont pas remplis
    //     echo 'Tous les champs ne sont pas remplis';
    // }


    function checkLogin($email,$password){
        try{
            $sql= "SELECT * from `user` 
            where email like :email and password like :password;";
            $db=DataBase::getPDO()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute([
                'email'=>$email,
                'password'=>$password
            ]);
            $tuple = $db->fetch();
            if ($tuple) {
                $user = new User(null,$tuple['nom'], $tuple['prenom'],$tuple['email'],$tuple['password'],0);
                return $user;
            }
            else {
                return false;
            }
        }
        catch (PDOException $exception) {
            $msgErreur =$exception->getMessage();
            require_once './views/content/error.php';
        } 
    }

?>