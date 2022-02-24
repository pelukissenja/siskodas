<?php 
    define("HOST",   "localhost");
    define("DBASE",  "db_sd");
    define("USER",   "root");
    define("PASS",   "");

    class Config
    {

        private $pdo;
        function __construct()
        {
            try {
                $this->pdo = new \PDO('mysql:host='.HOST.';dbname='. DBASE,USER,PASS);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }catch(\PDOException $e){
                throw new \Exception($e->getMessage());
            }
        }
    }
    require_once('login.php');
    $user = new Login($this->pdo);
?>