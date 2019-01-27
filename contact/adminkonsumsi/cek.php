<?php
	session_start();
	include "connect.php";

	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = "6LdjwSAUAAAAAMFTm6abHWUh2ycvDcjTpItaWtqx";
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if(!$responseData->success){
        	header("Location: login.php?err=2");
        } else {
		    $user = $_POST['username'];
			$pass = $_POST['password'];

			if ($user == "konsumsi" && $pass == "cekkonsumsi"){
				$_SESSION['user'] = $user;
				header("Location: admin.php");
			}
        }
    } else {
    	header("Location: login.php?err=3");
    }
?>