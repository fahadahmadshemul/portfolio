<?php 
    include "inc/header.php";
?>
<?php 
    include "inc/sidebar.php";
?>
<?php 
    if(isset($_GET['delId'])){
        $delId = $_GET['delId'];
        $delete = $cnt->deletePortfolio($delId);
    }

?>
    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div class="main">
            <h2>Dashboard</h2>
            <div class="block">

                <div class="table-resposive-sm">
                <?php 
                if(isset($delete)){
                    echo $delete;
                }
                ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        <?php 
                            $select = $cnt->selectPortfolio();
                            if($select){
                                $i = 0;
                                while($result = $select->fetch_assoc()){
                                  $i++;
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['title']; ?></td>
                                <td><?php echo $result['year']; ?></td>
                                <td><?php echo $cnt->textShorten($result['description'], 40); ?></td>
                                <td><img src="<?php echo $result['image']; ?>" style="width:60px;height:60px" alt=""></td>
                                <td>
                                    <a href="editPortfolio.php?editId=<?php echo $result['id']; ?>">Edit</a> ||  
                                    <a onclick="return confirm('Are you sure to delete?')" href="?delId=<?php echo $result['id']; ?>">Delete</a>
                                </td>
                            </tr>
                                <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
    include "inc/footer.php";
?>