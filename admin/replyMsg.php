
<?php 
    include "inc/header.php";
?>

<?php 
    include "inc/sidebar.php";
?>
<?php 
    if(($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST['submit'])){
        $replyMsg = $cnt->replyMessage($_POST);
        
    }
?>

    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div class="main">
            <h2>View Message</h2>
            <div class="block">
                <div class="row">
                    <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 mx-auto">
                    <?php 
                        if(!isset($_GET['id']) || $_GET['id'] == NULL){
                            header("location: inbox.php");
                        }else{
                            $id = $_GET['id'];   
                        }
                        $selectMsgById = $cnt->selectMessageById($id);
                            if($selectMsgById){
                                while($result = $selectMsgById->fetch_assoc()){
                    ?>
                        <form action="" method="post">
                            <div class="form-inner">
                            <?php 
                                if(isset($replyMsg)){
                                    echo $replyMsg;
                                }
                            ?>
                                <div class="form-group">
                                    <label for="">To</label>
                                    <input type="text" name="toEmail" class="form-control" readonly value="<?php echo $result['email']; ?>">
                                </div>
                                <div class="form-gorup">
                                    <label for="">Form</label>
                                    <input type="text" name="formEmail" class="form-control" > 
                                </div>
                                <div class="form-gorup">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" class="form-control" > 
                                </div>
                                <div class="form-gorup">
                                    <label for="">Message</label>
                                    <textarea name="message" class="form-control" id="" ></textarea>
                                </div>
                                <div class="text-center mt-3">
                                    <input type="submit" name="submit" value="Send" href="inbox.php" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
    include "inc/footer.php";
?>