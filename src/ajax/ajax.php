<?php
    require_once './src/models/models.php';
    require_once './src/database/UserDataBase.php';
    require_once './src/database/database.php';

    // Requete SQL table user

    $sql= "SELECT * FROM `user`;";
    $db=DataBase::getPDO()->query($sql);
    $db->execute();
    $req = $db->fetchAll(); 
    $datas = $req;
    $json = [];
    foreach ($datas as $data){
        array_push($json, $data['email']);
    }
    
    file_put_contents("./src/ajax/listeEmail.json", json_encode($json));


?>