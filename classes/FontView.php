<?php
    $realpath = realpath(dirname(__FILE__));
    include $realpath."/../lib/Database.php";
    include $realpath."/../helpers/Format.php";

    class FontView{
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function viewPortfolio(){
            $query = "SELECT * FROM tbl_portfolio ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }
    }


?>