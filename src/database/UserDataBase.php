<?php
class UserDataBase {
    public static function create ($user)
    {
      try
      {
        $sql= "INSERT INTO `user`(`nom`, `prenom`,`email`, `telephone`,`password`,`isAdmin`) 
          VALUES (:nom,:prenom,:email,:telephone,:password,:isAdmin);";
          $db=DataBase::getPDO()->prepare($sql);
          // les parties variables marquées par : sont remplacées grace a un tableau associatif!
          // cela protège de l'injection SQL
          $db->execute([
              'nom'=>$user->nom,
              'prenom'=>$user->prenom,
              'email'=>$user->email,
              'telephone'=>$user->telephone,
              'password'=>$user->password,
              'isAdmin'=>0
          ]);
      }
      catch (PDOException $exception) 
      {
          $msgErreur =$exception->getMessage();
          require_once './views/content/error.php';
      } 
    }
    public static function checkLogin($email,$password) {
      try {
        $sql= "SELECT * from `user` 
          where email like :email and password like :password;";
          $db=DataBase::getPDO()->prepare($sql);
          // les parties variables marquées par : sont remplacées grace a un tableau associatif!
          // cela protège de l'injection SQL
          $db->execute([
              'email'=>$email,
              'password'=>$password
          ]);
          $req = $db->fetch();
        //  var_dump($req);
        //  die;
          if ($req) {
                  $user = new User($req['ID'],$req['nom'],$req['prenom'],$req['email'],$req['telephone'],$req['password'],$req['isAdmin']);
                  return $user;
              }
              else
              return false;
      }
      catch (PDOException $exception) {
          $msgErreur =$exception->getMessage();
          require_once './views/errors/template_affichage_error.php';
      } 
    }
}