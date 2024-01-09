<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'wiki');
define('DB_PASSWORD', '');

    class Database {
        
        private static $instence;
        private $connection;
    
    
        public function __construct(){
            try {
                $this->connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
    
    

    public static function getInstance(){

        if(!self::$instence){
            self::$instence = new Database();
        }
        return self::$instence;
    }

    
   

        /**
         * Get the value of connection
         */ 
        public function getConnection()
        {
                return $this->connection;
        }
}
// $dd = new Database();
// var_dump($dd);