<?php
namespace Src\Database;
use Src\Models\Concert;

  class ConcertDataBase {

      public static function create ($concert){
        try{
          $sql= "INSERT INTO `concert`(`date`, `URLImage`, lieu, heure) 
            VALUES (:date, :URLImage, :lieu, :heure);"; // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            $db=DataBase::getPDO()->prepare($sql);   // (cela protège de l'injection SQL)
            $db->execute([
                'date'=>$concert->date,
                'URLImage'=>$concert->image,
                'lieu'=>$concert->lieu,
                'heure'=>$concert->heure
            ]);
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function read () {
        try {
          $sql= "SELECT * from `concert`"; 
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
            $req = $db->fetchALL(\PDO::FETCH_OBJ);
            $obj = [];
            foreach ($req as $objReq){
              $obj[] = new Concert($objReq->ID, $objReq->date, $objReq->lieu, $objReq->heure, $objReq->URLImage);
            }
            return $obj;
        }
        catch (\PDOException $exception){
          $msgErreur = $exception->getMessage();
          require_once './views/content/error.php';
        } 
      }

      public static function update ($concertId, $colonne, $value){
        try{
          $sql= "UPDATE `concert`
            SET $colonne = '$value' 
            WHERE `id` = $concertId;";
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function delete ($concertId){
        try{
          $sql= "DELETE FROM `concert` 
            WHERE `id` = $concertId;";
            $db=DataBase::getPDO()->prepare($sql);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
      }

      public static function moisFr($num){
        $anglais = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun' ,'Jul' ,'Aug' ,'Sep' ,'Oct' ,'Nov' ,'Dec');
        $francais = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
        return str_replace($anglais, $francais, $num);
    }

  }
?>