<?php
    namespace Src\Ajax;
    use Src\Database\Database;


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
    
    file_put_contents("../src/Ajax/listeEmail.json", json_encode($json));


?>