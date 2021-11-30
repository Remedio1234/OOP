<?php
    class Database {
        //database connection setup
        protected  $db_host = "mysql:host=localhost;dbname=facenote";
        protected  $db_user = 'root';
        protected  $db_pass = '';

        public function connect(){
            //Connection ready
            try { 
                $dbConn = new PDO($this->db_host, $this->db_user, $this->db_pass); 
                return $dbConn;
            } catch (Exception $ex) { 
                die("Database Error: ". $ex->getMessage()); 
            } 
        }
    }
?>