<?php
class UserDataBase
{
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
    public static function checkLogin($email,$password)
    {
      try
      {
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
         // var_dump($tuple);
          if ($tuple)
              {
                  $user = new User($tuple['pseudo'],$tuple['email'],$tuple['password'],$tuple['id']);
                  return $user;
              }
              else
              return false;
      }
      catch (PDOException $exception) 
      {
          $msgErreur =$exception->getMessage();
          require_once './views/errors/template_affichage_error.php';
      } 
    }
}