<?php
    spl_autoload_register(function($class){
		include_once "../classes/".$class.".php";
	});
    $ad = new Admin();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $adl = $ad->adminLogin($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login fahad.me</title>
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .admin-form{
            background: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-radius:10px;
        }
    </style>
</head>
<body class="bg-primary" style="height:100vh">

    <div class="container">
        <div class="col-md-7 mx-auto admin-form pb-5 pt-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-12 text-center">
                    <h2>Admin Login</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <?php
                            if(isset($adl)){
                                echo $adl;
                            }
                        ?>
                        <div class="form-group w-75 mx-auto">
                            <label for="">Username</label>
                            <input type="text" name="adminUser" id="adminUser" class="form-control">
                        </div>
                        <div class="form-group w-75 mx-auto">
                            <label for="">Password</label>
                            <input type="password" name="adminPass" id="adminPass" class="form-control">
                        </div>
                        <div class="text-center w-75 mx-auto">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/popper.min.js"></script>
    <script src="..js/bootstrap.min.js"></script>
    <script src="js/adminjs.js"></script>
    
</body>
</html>