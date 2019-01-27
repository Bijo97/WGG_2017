<?php
$infod = "U72370";
$passw = "HE26B4";

session_start();
if($_SESSION['access_token'] != "" && time() <= $_SESSION['limit'])
{
	include "eric.lib.php";
	$params = array("access_token" => $_SESSION['access_token'], "userid" => $infod, "passwd" => $passw);
	$temp = httpPost("https://student.petra.ac.id/ericapi/v1/wgg/data/json",$params);
	$tumps = json_decode($temp);
	echo "<pre>";
	var_dump($tumps);
	echo "</pre>";
}
else
{
	echo "get out from here, dude !";
}
?>
