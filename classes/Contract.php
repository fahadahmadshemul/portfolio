<?php
    $realpath = realpath(dirname(__FILE__));
    include $realpath."/../lib/Database.php";
    include $realpath."/../helpers/Format.php";

    class Contract{
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function textShorten($text, $limit = 400){
            $text = $text. " ";
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text."........";
            return $text;
        }
        public function selectAllContractMsg(){
            $query = "SELECT * FROM `tbl_contract` ORDER BY id DESC";
            $select = $this->db->select($query);
            return $select;
        }
        public function selectMessageById($id){
            $query = "SELECT * FROM tbl_contract WHERE id='$id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function replyMessage($data){
            $to__email   = $this->fm->validation($data['toEmail']);
            $form__email = $this->fm->validation($data['formEmail']);
            $subject     = $this->fm->validation($data['subject']);
            $message     = $this->fm->validation($data['message']);

            $to__email   = mysqli_real_escape_string($this->db->link, $to__email);
            $form__email = mysqli_real_escape_string($this->db->link, $form__email);
            $subject     = mysqli_real_escape_string($this->db->link, $subject);
            $message     = mysqli_real_escape_string($this->db->link, $message);

            if(empty($to__email) || empty($form__email) || empty($subject) || empty($message)){
                $msg = "<div class='alert alert-danger'>Feild must not be empty..!</div>";
                return $msg;
            }elseif(!filter_var($form__email, FILTER_VALIDATE_EMAIL)){
                $msg = "<div class='alert alert-danger'>Invalid email format..!</div>";
                return $msg;
            }else{
                $send = mail($to__email, $form__email, $subject, $message);
                if($send){
                    $msg = "<div class='alert alert-success'>Send message successfuly..!</div>";
                    return $msg;
                }else{
                    $msg = "<div class='alert alert-danger'>Message not sent..!</div>";
                    return $msg;
                }
            }
        }
        public function deleteMessage($delid){
            $delid = $this->fm->validation($delid);

            $delid = mysqli_real_escape_string($this->db->link, $delid);
            
            $query = "DELETE FROM tbl_contract WHERE id='$delid'";
            $delete = $this->db->delete($query);
            if($delete){
                $msg = "<div class='alert alert-success'>Message deleted successfully..!</div>";
                return $msg;
            }else{
                $msg = "<div class='alert alert-danger'>Message not Delete..!</div>";
                return $msg;
            }
        }
        public function countNewMessage(){
            $query = "SELECT * FROM tbl_contract WHERE status ='0'";
            $result = $this->db->select($query);
            return $result;
        }
        public function changePassword($data, $id){
            $old_pass = $this->fm->validation($data['old_pass']);
            $new_pass = $this->fm->validation($data['new_pass']);

            $old_pass = mysqli_real_escape_string($this->db->link, $old_pass);
            $new_pass = mysqli_real_escape_string($this->db->link, $new_pass);

            if(empty($old_pass) || empty($new_pass)){
                $msg = "<div class='alert alert-danger'>Feild must not be empty..!</div>";
                return $msg;
            }else{
                $chk = "SELECT * FROM tbl_admin WHERE id='$id' && adminPass=md5('$old_pass')";
                $chkPass = $this->db->select($chk);
                if($chkPass != false){
                    $query = "UPDATE tbl_admin SET adminPass = md5('$new_pass') WHERE id='$id'";
                    $update = $this->db->update($query);
                    if($update){
                        $msg = "<div class='alert alert-success'>Change Password successfully..!</div>";
                        return $msg;
                    }else{
                        $msg = "<div class='alert alert-danger'>Password not changed..!</div>";
                        return $msg;
                    }
                }
            }
        }
        public function addPortfolio($data, $file){
            $title       = $this->fm->validation($data['title']);
            $year        = $this->fm->validation($data['year']);
            $description = $this->fm->validation($data['description']);
            $image       = $this->fm->validation($data['image']);

            $title       = mysqli_real_escape_string($this->db->link, $title);
            $year        = mysqli_real_escape_string($this->db->link, $year);
            $description = mysqli_real_escape_string($this->db->link, $description);
            $image       = mysqli_real_escape_string($this->db->link, $image);

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $file['image']['name'];
            $file_size = $file['image']['size'];
            $file_tmp = $file['image']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;

            if(empty($title) || empty($year) || empty($description)){
                $msg = "<div class='alert alert-danger'>Feild must not be empty..!</div>";
                return $msg;
            }elseif($file_size > 2097152){
                $msg = "<div class='alert alert-danger'>Image size should be less than 2mb..!</div>";
                return $msg;
            }elseif(in_array($file_ext, $permited) == false){
                $msg = "<div class='alert alert-danger'>You can upload only".implode(',', $permited)."..!</div>";
                return $msg;
            }else{
                move_uploaded_file($file_tmp, $uploaded_image);
                $query = "INSERT INTO tbl_portfolio (title, year, description, image) VALUES('$title', '$year', '$description', '$uploaded_image')";
                $insert = $this->db->insert($query);
                if($insert){
                    $msg = "<div class='alert alert-success'>Insert Portfolio successfully..!</div>";
                    return $msg;
                }else{
                    $msg = "<div class='alert alert-danger'>Portfolio not Inserted..!</div>";
                    return $msg;
                }
            }
        }
        public function selectPortfolio(){
            $query = "SELECT * FROM tbl_portfolio ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function selectPortfolioById($editId){
            $query = "SELECT * FROM tbl_portfolio WHERE id='$editId' LIMIT 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function editPortfolio($data, $file, $editId){
            $title       = $this->fm->validation($data['title']);
            $year        = $this->fm->validation($data['year']);
            $description = $this->fm->validation($data['description']);
            
            $title       = mysqli_real_escape_string($this->db->link, $title);
            $year        = mysqli_real_escape_string($this->db->link, $year);
            $description = mysqli_real_escape_string($this->db->link, $description);

            $permited  = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $file['image']['name'];
			$file_size = $file['image']['size'];
			$file_tmp  = $file['image']['tmp_name'];
			
			$div            = explode(".", $file_name);
			$file_ext       = strtolower(end($div));
			$unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;

            if($title == "" || $year =="" || $description == ""){
                $msg = "<div class='alert alert-danger'>Feild must not be empty..!</div>";
                return $msg;
            }else{
                if(!empty($file_name)){
                    move_uploaded_file($file_tmp, $uploaded_image);
                    $query ="UPDATE tbl_portfolio
                            SET
                            title       = '$title',
                            year        = '$year',
                            description = '$description',
                            image       = '$uploaded_image'
                    WHERE id='$editId'";
                    $updated_row = $this->db->update($query);
                    if($updated_row){
                        $msg = "<div class='alert alert-success'>Updated Portfolio successfully..!</div>";
                        return $msg;
                    }else{
                        $msg = "<div class='alert alert-danger'>Portfolio not updated..!</div>";
                        return $msg;
                    }
                }else{
                    $query ="UPDATE tbl_portfolio
                            SET
                            title       = '$title',
                            year        = '$year',
                            description = '$description'
                    WHERE id='$editId'";
                    $updated_row = $this->db->update($query);
                    if($updated_row){
                        $msg = "<div class='alert alert-success'>Updated Portfolio successfully..!</div>";
                        return $msg;
                    }else{
                        $msg = "<div class='alert alert-danger'>Portfolio not updated..!</div>";
                        return $msg;
                    }
                }
            }
        }
        public function deletePortfolio($delId){
            $delId = $this->fm->validation($delId);
            $delId = mysqli_real_escape_string($this->db->link, $delId);

            $selectquery = "SELECT * FROM tbl_portfolio WHERE id='$delId'";
            $select = $this->db->select($selectquery);
            if($select){
                while($delImg = $select->fetch_assoc()){
                    $dellink = $delImg['image'];
                    unlink($dellink);
                }
            }
            $delQuery = "DELETE FROM tbl_portfolio WHERE id='$delId'";
            $delete = $this->db->delete($delQuery);
            if($delete){
                $msg = "<div class='alert alert-success'>Portfolio deleted successfully..!</div>";
                return $msg;
            }else{
                $msg = "<div class='alert alert-danger'>Portfolio not deleted..!</div>";
                return $msg;
            }
            
        }
    }


?>