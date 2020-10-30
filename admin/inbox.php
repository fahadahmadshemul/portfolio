
<?php 
    include "inc/header.php";
?>

<?php 
    include "inc/sidebar.php";
?>
<?php 
    if(isset($_GET['delid'])){
        $delid = $_GET['delid'];
        $deleteMsg = $cnt->deleteMessage($delid);
    }
?>

    <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div class="main">
        <h2>Inbox</h2>
        <div class="block">
            <div class="table-responsive-sm">
            <?php 
                if(isset($deleteMsg)){
                    echo $deleteMsg;
                }
            ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr scope="col">Sl no</tr>
                        <tr scope="col">Email</tr>
                        <tr scope="col">plan</tr>
                        <tr scope="col">Message</tr>
                        <tr scope="col">Action</tr>
                    </thead>
                    <tbody>
                    <?php
                        $selectContractMsg = $cnt->selectAllContractMsg();
                        if($selectContractMsg){
                            $i=0;
                            while($result = $selectContractMsg->fetch_assoc()){
                                $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php
                                if($result['package'] == 1){
                                    echo "Basic";
                                }elseif($result['package'] == 2){
                                    echo "Standard";
                                }else{
                                    echo "Premium";
                                }
                            ?></td>
                            <td><?php
                                echo $cnt->textShorten($result['message'],20);
                            ?></td>
                            <td>
                                <a href="viewMsg.php?id=<?php echo $result['id'] ?>">view</a> ||
                                <a href="replyMsg.php?id=<?php echo $result['id'] ?>">reply</a> ||
                                <a onclick="return confirm('Are you sure to delete?')" href="?delid=<?php echo $result['id'] ?>">delete</a>
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