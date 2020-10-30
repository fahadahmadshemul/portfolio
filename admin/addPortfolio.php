<?php 
    include "inc/header.php";
?>
<?php 
    include "inc/sidebar.php";
?>
<?php 
    error_reporting(0);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $addPortfolio = $cnt->addPortfolio($_POST, $_FILES);
    }
?>
    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div class="main">
        <h2>Dashboard</h2>
        <div class="block">
            <div class="col-md-7 mx-auto">
            <form action="" method="post" enctype="multipart/form-data">
            <?php 
                if(isset($addPortfolio)){
                    echo $addPortfolio;
                }
            ?>
                <div class="form-group">
                    <label for="">Portfolio Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Portfolio Year</label>
                    <input type="text" name="year" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Portfolio Description</label>
                    <textarea name="description" id="" cols="" rows="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Portfolio Image</label>
                    <input class="form-control" type="file" name="image" id="">
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" value="Add Portfolio" class="btn btn-primary">
                </div>
            </form>
            </form>
            </div>
        </div>
    </div>
    </div>
</div>



<?php 
    include "inc/footer.php";
?>