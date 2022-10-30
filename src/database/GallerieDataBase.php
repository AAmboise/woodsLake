<?php
namespace Src\Database;
use Src\Models\Gallerie;

  class GallerieDataBase {

      public static function create ($gallerie){
        try{
          $sql= "INSERT INTO `gallerie`(`nom`) 
            VALUES (:nom);"; // Sécurité contre les injections SQL
            $db=DataBase::getPDO()->prepare($sql);  
            $db->execute([
                'nom'=>$gallerie->nom
            ]);
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function read () {
        try {
          $sql= "SELECT * from `gallerie`"; 
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
            $req = $db->fetchALL(\PDO::FETCH_OBJ);
            $obj = [];
            foreach ($req as $objReq){
              $obj[] = new Gallerie($objReq->ID, $objReq->nom);
            }
            return $obj;
        }
        catch (\PDOException $exception){
          $msgErreur = $exception->getMessage();
          require_once './views/content/error.php';
        } 
      }

      public static function update ($gallerieId, $value){
        try{
          $sql= "UPDATE `gallerie`
            SET nom = '$value' 
            WHERE `id` = $gallerieId;";
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function delete ($gallerieId){
        try{
          $sql= "DELETE FROM `gallerie` 
            WHERE `id` = $gallerieId;";
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

  }
?>