<?php
	session_start();
	include "connect.php";

	function httpPost($url,$params)
        {
                $postData = '';
                foreach($params as $k => $v) 
                { 
                        $postData .= $k . '='.$v.'&'; 
                }
                $postData = rtrim($postData, '&');

                $ch = curl_init();  
                curl_setopt($ch,CURLOPT_URL,$url);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_HEADER, false); 
                curl_setopt($ch, CURLOPT_POST, count($postData));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

                $output=curl_exec($ch);
                curl_close($ch);
                return $output;
        }

	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = "6LdjwSAUAAAAAMFTm6abHWUh2ycvDcjTpItaWtqx";
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if(!$responseData->success){
        	header("Location: login.php?err=2");
        } else {
        	//$username = $_POST['username'];
		//	$password = $_POST['password'];
//
//			$sql = "SELECT COUNT(*) AS jumlah FROM pac WHERE username = '".$username."' AND password = '".$password."'";
//			$result = mysql_query($sql);
//			$row = mysql_fetch_assoc($result);
//
//			if ($row['jumlah'] >= 1){
//				$_SESSION['user'] = $username;
//				header("Location: index.php");
//			} else {
//				header("Location: login.php?err=1");
//			}
//        }
//    } else {
//    	header("Location: login.php?err=3");
//    }
       		include "eric.session.php" ;
                $infod = $_POST['username'];
                $passw = $_POST['password'];

                if($_SESSION['access_token'] != "" && time() <= $_SESSION['limit'])
                {
                      	$params = array("access_token" => $_SESSION['access_token'], "userid" => $infod, "passwd" => $passw);
                        $temp = httpPost("https://student.petra.ac.id/ericapi/v1/wgg/data/json",$params);
                        $tumps = json_decode($temp);
                        if($tumps[0]->NRP != "" && $tumps[0]->PAC != "")
                        {
                               	$_SESSION['user'] = $tumps[0]->PAC;
                        	$_SESSION['nama'] = $tumps[0]->NAMA;
                                $_SESSION['nrp'] = $tumps[0]->NRP;
				$_SESSION['ujian'] = $tumps[0]->NO_UJIAN;
                                header("location:home.php");
                        }
                        else
                        {
                                header("location:login.php?err=1");
                       	}
              	}
                else
                {
                	header("location:login.php?err=1");
                }

        }
        else
        {
                header("Location: login.php?err=3");
        }
?>
