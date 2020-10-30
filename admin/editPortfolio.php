<?php 
    include "inc/header.php";
?>
<?php 
    include "inc/sidebar.php";
?>

    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div class="main">
        <h2>Dashboard</h2>
        <div class="block">
            <div class="col-md-7 mx-auto">
        <?php 
            if(!isset($_GET['editId']) OR $_GET['editId'] == NULL){
                header("location: portfoliolist.php");
            }else{
                $editId = $_GET['editId'];
            }
        ?>
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $edit = $cnt->editPortfolio($_POST, $_FILES, $editId);
            }
        ?>
        <?php  
            $select = $cnt->selectPortfolioById($editId);
            if($select){
                while($result = $select->fetch_assoc()){
        ?>
        
            <form action="" method="post" enctype="multipart/form-data">
            <?php
                if(isset($edit)){
                    echo $edit;
                }
            ?>
                <div class="form-group">
                    <label for="">Portfolio Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $result['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Portfolio Year</label>
                    <input type="text" name="year" id="" class="form-control" value="<?php echo $result['year']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Portfolio Description</label>
                    <textarea name="description" id="" cols="" rows="" class="form-control"><?php echo $result['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <img src="<?php echo $result['image']; ?>" style="width:60px;height:60px;" alt=""> <br>
                    <label for="">Portfolio Image</label>
                    <input class="form-control" type="file" name="image" id="">
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" value="Add Portfolio" class="btn btn-primary">
                </div>
                </form>
            <?php }} ?>
            </div>
        </div>
    </div>
    </div>
</div>



<?php 
    include "inc/footer.php";
?>