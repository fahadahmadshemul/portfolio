<?php
    $realpath = realpath(dirname(__FILE__));
    include $realpath."/../config/config.php";

    class Database{
        public $host = DB_HOST;
        public $user = DB_USER;
        public $pass = DB_PASS;
        public $db   = DB_NAME;
        
        public $link;
        public $error;

        public function __construct(){
            $this->connectionDB();
        }
        private function connectionDB(){
            $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if(!$this->link){
                $this->error = "Connection fail".$this->link->connect_error;
                return false;
            }
        }

        //for select data from database

        public function select($query){
            $result = $this->link->query($query) or die($this->link->error.__LINE__);
            if($result->num_rows > 0){
                return $result;
            }else{
                return false;
            }
        }

        //for update from database

        public function update($query){
            $update = $this->link->query($query) or die($this->link->error.__LINE__);
            if($update){
                return true;
            }else{
                return $update;
            }
        }

        //for insert data to database

        public function insert($query){
            $insert = $this->link->query($query) or die($this->link->error.__LINE__);
            if($insert){
                return $insert;
            }else{
                return false;
            }
        }

        //for delete data from database

        public function delete($query){
            $delete = $this->link->query($query) or die($this->link->error.__LINE__);
            if($delete){
                return $delete;
            }else{
                return false;
            }
        }
    }

    
?>