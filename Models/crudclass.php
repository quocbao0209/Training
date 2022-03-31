<?php 
    require_once "config.php";

    class crudClass extends dbConfig{
        public function __construct()
        {
            parent::__construct();
        }

        //in du lieu ra man hinh
        public function getData($sql){
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        //them sua? xoa'
        public function action($sql){
            $this->conn->exec($sql);
        }
    }
?>