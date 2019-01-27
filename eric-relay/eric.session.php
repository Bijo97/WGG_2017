<?php
session_start();
if($_SESSION['access_token'] == "" || time() <= $_SESSION['limit'] || $_SESSION['limit'] != "")
{
	include "eric.lib.php";
	/* Initializing Segment */
	$params = array("client_id"=>"f3d259ddd3ed8ff3843839b", "client_secret"=>"4c7f6f8fa93d59c45502c0ae8c4a95b", "redirect_uri"=>"https://wgg.petra.ac.id", "grant_type"=>"ericapi2");
	$temp = httpPost("https://student.petra.ac.id/ericapi/v1/authorize",$params);
	$timp = json_decode($temp);
	$_SESSION['access_token'] = $timp->access_token;
	$_SESSION['limit'] = time() + 3500;
}
?>
