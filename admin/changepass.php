
<?php 
    include "inc/header.php";
?>

<?php 
    include "inc/sidebar.php";
?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $changePass = $cnt->changePassword($_POST, $id);
    }
?>

    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div class="main">
            <h2>Change Password</h2>
            <div class="block">
                <div class="row">
                    <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 mx-auto">
                    
                        <div class="form-inner">
                            <div class="col-md-12">
                                <form action="" method="post">
                                <?php 
                                    if(isset($changePass)){
                                        echo $changePass;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label for="">Old Password</label>
                                        <input type="password" name="old_pass" class="form-control">
                                    </div>
                                    <div class="form-gorup">
                                        <label for="">New Password</label>
                                        <input type="password" name="new_pass" class="form-control" />
                                    </div>
                                    <div class="text-center mt-3">
                                        <input type='submit' name="submit" value="Change" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
    include "inc/footer.php";
?>