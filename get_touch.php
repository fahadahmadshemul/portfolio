<?php
    spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
    $usr = new User();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $package = $_POST['package'];
        $message = $_POST['message'];
        $contractMsg = $usr->ContractMessage($email, $package, $message);
    }
?>