<?php
    $realpath = realpath(dirname(__FILE__));
    include $realpath."/../lib/Database.php";
    include $realpath."/../helpers/Format.php";

    class User{
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function ContractMessage($email, $package, $message){
            $email   = $this->fm->validation($email);
            $package = $this->fm->validation($package);
            $message = $this->fm->validation($message);

            $email   = mysqli_real_escape_string($this->db->link, $email);
            $package = mysqli_real_escape_string($this->db->link, $package);
            $message = mysqli_real_escape_string($this->db->link, $message);

            if(empty($email) || empty($message)){
                echo "<span class='alert alert-danger text-center d-block'>Feild must not be empty..!</span>";
                exit();
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<span class='alert alert-danger text-center d-block'>Invalid email Format..!</span>"; 
                exit();
            }else{
                $query = "INSERT INTO tbl_contract (email, package, message) VALUES ('$email', '$package', '$message')";
                $insert = $this->db->insert($query);
                if($insert){
                    echo "<span class='alert alert-success text-center d-block'>Your Request sent successfully..!</span>";
                    exit();
                }else{
                    echo "<span class='alert alert-danger text-center d-block'>Something went wrong..!</span>";
                    exit();
                }
            }
            
        }
    }
?>