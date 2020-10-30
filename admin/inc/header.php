
<?php
    include "../lib/Session.php";
    Session::admincheckSession();
    
?>
<?php 
    include "../classes/Contract.php";
    $cnt = new Contract();

    if(isset($_GET['action']) && $_GET['action'] == 'logout'){
      Session::destroy();
    }
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/admin_css/style.css">
    <style>
      .navbar-brand{
        font-weight:700;
        color:#fff;
      }
      .navbar-brand:hover{
        text-decoration:underline!important;
        color:#fff;
      }
      .nav-item a{
        color:#fff !important;
      }
      .nav-item a:hover {
        color: #f2cf00 !important;
        text-decoration: none !important;
    }
    .collapsenav {
      position: absolute !important;
      background: #4f1ea8 !important;
      text-align: center;
      display: inline-block !important;
      padding: 20px;
      right: 0%;
      top: 100%;
      text-align:left!important;
  }
    @media screen and (max-width: 992px){
      .header__burger{
        display:block;
      }
.navbar-nav{
  display:none;
}
      .collapsenav {
        position: absolute !important;
        background: #4f1ea8 !important;
        text-align: center;
        display: inline-block !important;
        padding: 20px;
        right: 0%;
        top: 100%;
        text-align:left!important;
        
    }
    }
    .sidebar {
    margin-top: 26px !important;
    overflow-y: scroll;
    height: 100vh;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    line-height: 30px;
    padding: 10px 30px;
    text-align: left;
}

.sidebar ul li  {
    color: #fff;
    font-weight: 600;
    transition: all 0.5s;
    cursor:pointer;
}

.sidebar ul li:hover {
    color: #ecec00;
    text-decoration: none;
    padding-left: 40px;
}
.main {
    margin-top: 74px !important;
    min-width: 1000px;
    min-height: 100vh;
    background: whitesmoke;
    border:10px solid #332179;
}
.main h2 {
    background: linear-gradient(to bottom,#7a19f1,#332179) !important;
    color: #fff;
    padding: 10px 20px;
    border-bottom: 2px solid #332179;
    font-size:20px;
}
.block{
  padding:20px 30px;
}
@media screen and (max-width: 992px){
  .sidebar{
    margin-top:170px !important;
  }
  .main{
    margin-top:170px !important;
  }
}
.sidebar ul {
    margin-left: 0px !important;
    padding-left: 0;
}
.sidebar ul{
        margin-left:0px !important;
    }
    .sidebar ul {
        margin-left: 0px !important;
        padding-left: 0;
    }
    ul.subside {
        padding-left: 0!important;
        
    }
    .subside1{
      
    }
    ul.subside li {
        padding-top: 0px;
        padding-bottom: 0px;
        background: #4d08a6;
        border-bottom: 1px solid #39067b;
    }
    .subside li a{
      font-size:14px;
    }
    ul li a{
      color:#fff !important;
      text-decoration:none!important;
    }
    </style>
</head>
<body>
<div class="headerNavbar fixed-top w-100 bg-primary text-white">
        <nav class="navbar navbar-expand-lg pb-lg-3 pt-lg-3">
            <div class="container">
                <div>
                <div class="header_logo-icon"></div>
                <a class="navbar-brand f-left" href="index.php">fahad.me</a>
                </div>
                <svg class="header__burger d-lg-none" width="25px">
                        <svg id="list" viewBox="0 0 511.626 511.627"><title>list</title><path d="M118.771,200.999H27.406c-7.611,0-14.084,2.664-19.414,7.994C2.663,214.32,0,220.791,0,228.407v54.823 c0,7.61,2.663,14.078,7.992,19.406c5.33,5.329,11.803,7.994,19.414,7.994h91.365c7.611,0,14.084-2.665,19.414-7.994 c5.33-5.328,7.992-11.796,7.992-19.406v-54.823c0-7.616-2.662-14.087-7.992-19.414S126.382,200.999,118.771,200.999z"></path><path d="M118.771,54.814H27.406c-7.611,0-14.084,2.663-19.414,7.993C2.663,68.137,0,74.61,0,82.221v54.821 c0,7.616,2.663,14.091,7.992,19.417c5.33,5.327,11.803,7.994,19.414,7.994h91.365c7.611,0,14.084-2.667,19.414-7.994 s7.992-11.798,7.992-19.414V82.225c0-7.611-2.662-14.084-7.992-19.417C132.855,57.48,126.382,54.814,118.771,54.814z"></path><path d="M118.771,347.177H27.406c-7.611,0-14.084,2.662-19.414,7.994C2.663,360.502,0,366.974,0,374.585v54.826 c0,7.61,2.663,14.086,7.992,19.41c5.33,5.332,11.803,7.991,19.414,7.991h91.365c7.611,0,14.084-2.663,19.414-7.991 c5.33-5.324,7.992-11.8,7.992-19.41v-54.826c0-7.611-2.662-14.083-7.992-19.411S126.382,347.177,118.771,347.177z"></path><path d="M484.215,200.999H210.131c-7.614,0-14.084,2.664-19.414,7.994s-7.992,11.798-7.992,19.414v54.823 c0,7.61,2.662,14.078,7.992,19.406c5.327,5.329,11.8,7.994,19.414,7.994h274.091c7.61,0,14.085-2.665,19.41-7.994 c5.332-5.328,7.994-11.796,7.994-19.406v-54.823c0-7.616-2.662-14.087-7.997-19.414 C498.3,203.663,491.833,200.999,484.215,200.999z"></path><path d="M484.215,347.177H210.131c-7.614,0-14.084,2.662-19.414,7.994c-5.33,5.331-7.992,11.8-7.992,19.41v54.823 c0,7.611,2.662,14.089,7.992,19.417c5.327,5.328,11.8,7.987,19.414,7.987h274.091c7.61,0,14.085-2.662,19.41-7.987 c5.332-5.331,7.994-11.806,7.994-19.417v-54.823c0-7.61-2.662-14.085-7.997-19.41C498.3,349.846,491.833,347.177,484.215,347.177z "></path><path d="M503.629,62.811c-5.329-5.327-11.797-7.993-19.414-7.993H210.131c-7.614,0-14.084,2.663-19.414,7.993 s-7.992,11.803-7.992,19.414v54.821c0,7.616,2.662,14.083,7.992,19.414c5.327,5.327,11.8,7.994,19.414,7.994h274.091 c7.61,0,14.078-2.667,19.41-7.994s7.994-11.798,7.994-19.414V82.225C511.626,74.613,508.964,68.141,503.629,62.811z"></path></svg>
                    </svg>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    
                        <a class="nav-link" href="inbox.php">Inbox(
                        <?php 
                          $countMsg = $cnt->countNewMessage();
                          if($countMsg){
                            $count_msg = mysqli_num_rows($countMsg);
                            echo $count_msg;
                          }else{
                            echo "0";
                          }
                        ?>
                        )</a>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="changepass.php?id=<?php echo  Session::get('adminId'); ?>">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span style="color:green !important;font-weight:bold">Welcome! </span> <?php echo " ".  Session::get('adminName'); ?></a>
                    </li>
                    
                    <li class="nav-item">
                      <a href="?action=logout" class="nav-link">Logout</a>
                    </li>
                    </ul>
                
                </nav>
            </div>
        </div>
        <div class="clear"></div>