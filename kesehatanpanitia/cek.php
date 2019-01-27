<?php
	session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $user=$_POST['username'];
	    $pass=$_POST['password'];
	        $imap=false;
	        $timeout=15;
	        $fp = fsockopen ($host='john.petra.ac.id',$port=110,$errno,$errstr,$timeout);
	        $errstr = fgets ($fp);
	        if (substr ($errstr,0,1) == '+')
	        {
	            fputs ($fp,"USER ".$user."\n");
	            $errstr = fgets ($fp);
	            if (substr ($errstr,0,1) == '+')
	            {
	                fputs ($fp,"PASS ".$pass."\n");
	                $errstr = fgets ($fp);
	                if (substr ($errstr,0,1) == '+')
	                {
	                    $imap=true;
	                }
	            }
	        }

	     //    if ($user == "m21415183"){
	     //    		$sub = substr($user, 1, 8);
			   //      	$_SESSION['user'] = $sub;
						// header("Location: home.php");
	     //    	} else 
	        if(!$imap)
	        {
	            header("Location: login.php?err=1");
	            // exit();
	        }
	        else
	        {	
	        	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
			        //your site secret key
			        $secret = "6LdjwSAUAAAAAMFTm6abHWUh2ycvDcjTpItaWtqx";
			        //get verify response data
			        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
			        $responseData = json_decode($verifyResponse);
			        if(!$responseData->success){
			        	header("Location: login.php?err=2");
			        } else {
			        	$sub = substr($user, 1, 8);
			        	$_SESSION['user'] = $sub;
						header("Location: home.php");
			        }
			    } else {
			    	header("Location: login.php?err=3");
			    }
	        }
    }

	session_start();
	include "connect.php";

	
?>