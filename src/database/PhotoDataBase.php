<?php
namespace Src\Database;
use Src\Models\Photo;

  class PhotoDataBase {

      public static function create ($photo){
        try{
          $sql= "INSERT INTO `photo`(`titre`, `description`, `gallerie`, `URLFichier`) 
            VALUES (:titre, :description, :gallerie, :URLFichier);"; // Sécurité contre les injections SQL
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute([
                'titre'=>$photo->titre,
                'description'=>$photo->description,
                'gallerie'=>$photo->gallerie,
                'URLFichier'=>$photo->image
            ]);
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function read () {
        try {
          $sql= "SELECT * from `photo`"; 
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
            $req = $db->fetchALL(\PDO::FETCH_OBJ);
            $obj = [];
            foreach ($req as $objReq){
              $obj[] = new Photo($objReq->ID, $objReq->titre, $objReq->description, $objReq->gallerie, $objReq->URLFichier);
            }
            return $obj;
        }
        catch (\PDOException $exception){
          $msgErreur = $exception->getMessage();
          require_once './views/content/error.php';
        } 
      }

      public static function update ($photoId, $colonne, $value){
        try{
          $sql= "UPDATE `photo`
            SET $colonne = '$value' 
            WHERE `id` = $photoId;";
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function delete ($photoId){
        try{
          $sql= "DELETE FROM `photo` 
            WHERE `id` = $photoId;";
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