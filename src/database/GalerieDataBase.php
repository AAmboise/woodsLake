<?php
namespace Src\Database;
use Src\Models\Galerie;

  class GalerieDataBase {

      public static function create ($galerie){
        try{
          $sql= "INSERT INTO `galerie`(`nom`) 
            VALUES (:nom);"; // Sécurité contre les injections SQL
            $db=DataBase::getPDO()->prepare($sql);  
            $db->execute([
                'nom'=>$galerie->nom
            ]);
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function read () {
        try {
          $sql= "SELECT * from `galerie`"; 
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
            $req = $db->fetchALL(\PDO::FETCH_OBJ);
            $obj = [];
            foreach ($req as $objReq){
              $obj[] = new Galerie($objReq->ID, $objReq->nom);
            }
            return $obj;
        }
        catch (\PDOException $exception){
          $msgErreur = $exception->getMessage();
          require_once './views/content/error.php';
        } 
      }

      public static function update ($galerieId, $value){
        try{
          $sql= "UPDATE `galerie`
            SET nom = '$value' 
            WHERE `id` = $galerieId;";
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function delete ($galerieId){
        try{
          $sql= "DELETE FROM `galerie` 
            WHERE `id` = $galerieId;";
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