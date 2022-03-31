<?php 
    class dbConfig{
        private $host = "localhost";
        private $name = "root";
        private $pass = "";
        private $db = "school";

        protected $conn = null;

        public function __construct()
        {
            try{
                $this->conn = new PDO ("mysql:host=$this->host;dbname=$this->db", $this->name , $this->pass);

            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }

    }    
?>