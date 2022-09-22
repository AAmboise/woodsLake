<?php
require_once './models/models.php';
require_once 'UserDataBase.php';
require_once 'ActuDataBase.php';
require_once './configuration/configuration.php';

class DataBase
{
    private static $pdo;
    public static function getPDO() {
        if (self::$pdo === null) {
            // Récupération des paramètres de configuration BD
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("user");
            $mdp = Configuration::get("password");
            // Création de la connexion
            self::$pdo = new PDO($dsn, $login, $mdp, 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$pdo;
    }
    /*
    function pdo_connect()
    {
        $host="localhost";
        $user="root";
        $password="root";
        $dbname="backoffice";
        try {
            return new PDO("mysql:host=$host;dbname=$dbname;carset=utf8",$user,$password);
        } catch (PDOException $exception) {
            $msgErreur =$exception->getMessage();
            require_once './views/errors/template_affichage_error.php';
        }
    }*/
}
