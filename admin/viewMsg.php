
<?php 
    include "inc/header.php";
?>

<?php 
    include "inc/sidebar.php";
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
                        <div class="form-inner">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" readonly value="<?php echo $result['email']; ?>">
                            </div>
                            <div class="form-gorup">
                                <label for="">Plan</label>
                                <input type="text" class="form-control" readonly value="<?php
                                    if($result['package'] == 1){
                                        echo "Basic";
                                    }elseif($result['package'] == 2){
                                        echo "Standard";
                                    }else{
                                        echo "Premium";
                                    }
                                ?>"> 
                            </div>
                            <div class="form-gorup">
                                <label for="">Message</label>
                                <textarea name="" class="form-control" id="" ><?php echo $result['message']; ?></textarea>
                            </div>
                            <div class="text-center mt-3">
                                <a href="inbox.php" class="btn btn-primary">Ok</a>
                            </div>
                        </div>
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