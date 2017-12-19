<?php
define ("DATABASE", "inventory");
define ("MYSQL_HOST", "mysql:host=localhost;dbname=".DATABASE);
define ("MYSQL_USER", "www-data");
define ("MYSQL_PASSWORD", "ies29700412");
define ("TABLE_USER", "user");
define ("COLUMN_USER_NAME", "name");
define ("COLUMN_USER_PASSWORD", "password");

    class Dao{
        protected $conn;
        public $error;
        function __construct(){
            try{
                $this->conn = new PDO(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
            }
            catch(PDOException $e){
                $this->error="Error en la conexión: ".$e->getMessage();
                echo $this->error;
                $this->conn=null;
            }
        }

        function __destruct(){
            if($this->isConnected){
                $this->conn = null;
                unset($this->error);
            }
        }

        /**
         * Función que indica si hay conexión a la base de datos
         */
        function isConnected(){
            return $this->conn != null;
        }
        /**
         * Función que comprueba si el usuario existe en la BD
         */
        function validateUser($name, $password){
            try{
                $sql = "SELECT * FROM ".TABLE_USER." WHERE ".COLUMN_USER_NAME." = '".$name.
                "' AND ".COLUMN_USER_PASSWORD." = '".SHA1($password)."'"; 
                //echo $sql;
                $statement = $this->conn->query($sql);  // No es un array. Es un objeto que puedo recorrer
                return $statement->rowCount()==1;
            }
            catch(PDOException $e){
                $this->error="Error en la conexión: ".$e->getMessage();
                echo $this->error;
                $this->conn=null;
            }
        }
    }
?>