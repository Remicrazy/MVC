<?php

/*
    Class de connexion à la Base de donnée
*/

    class Bdd
    {
        private static $connect = null;
        private $bdd;

        private function __construct()
        {
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "mvcphp";


            try {
                $this->bdd = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
        }

        //Fonction qui permet la connexion à la BDD
        public static function getInstance()
        {
            if (is_null(self::$connect)) {
                self::$connect = new Bdd();
            }
            return self::$connect;
        }

        //Fonction qui permet d'exécuter une requête simple
        public function requete($req)
        {
            $query = $this->bdd->query($req);
            return $query;
        }

    }











