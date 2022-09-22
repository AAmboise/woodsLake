<?php

class ActuDataBase
{
    public static function create ($actu)
    {
        try
        {
            $sql= "INSERT INTO `actus` (`sujet`,`titre`,`etat`) 
            values (:sujet,:titre,:etat);";
            $db=DataBase::getPDO()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute([
                'sujet'=>$actu->sujet,
                'titre'=>$actu->titre,
                'etat'=>0
            ]);
        }
        catch (PDOException $exception) 
        {
            $msgErreur =$exception->getMessage();
            require_once './views/errors/template_affichage_error.php';
        }       

    }
    public static function listAll()
    {
        try
        {
            $sql= "SELECT * FROM `actus` order by id desc;";
            $db=DataBase::getPDO()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute();
            $actus = $db->fetchAll();
            return $actus;
        }
        catch (PDOException $exception) 
        {
            $msgErreur =$exception->getMessage();
            require_once './views/errors/template_affichage_error.php';
        }  
    }
    public static function list($etat)
    {
        try
        {
            $sql= "SELECT * FROM `actus` where `etat`=:etat;";
            $db=DataBase::getPDO()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute(['etat'=>$etat]);
            $actus = $db->fetchAll();
            return $actus;
        }
        catch (PDOException $exception) 
        {
            $msgErreur =$exception->getMessage();
            require_once './views/errors/template_affichage_error.php';
        }  
    }
    public static function read($idActu)
    {
        try
        {
            $sql= "SELECT * FROM `actus` where id=:id;";
            $db=DataBase::getPDO()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute(['id'=>$idActu]);
            $tuple = $db->fetch();
            if ($tuple)
                {
                    $actu = new Actu($tuple['sujet'],$tuple['titre'],$tuple['etat'],$tuple['id']);
                    return $actu;
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
    public static function update ($actu)
    {
        try
        {// requete update ici
            $sql= "UPDATE `actus` set `sujet`=:sujet,`titre`=:titre,`etat`=:etat
            where id=:id;";
            $db=DataBase::getPDO()->prepare($sql);
            // les parties variables marquées par : sont remplacées grace a un tableau associatif!
            // cela protège de l'injection SQL
            $db->execute([
                'sujet'=>$actu->sujet,
                'titre'=>$actu->titre,
                'etat'=>$actu->etat,
                'id'=>$actu->getId()
            ]);
        }
        catch (PDOException $exception) 
        {
            $msgErreur =$exception->getMessage();
            require_once './views/errors/template_affichage_error.php';
        }       

    }
}