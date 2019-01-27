<?php
	session_start();
	include "connect.php";

	$user = $_POST['username'];
	$pass = $_POST['password'];

	if ($user == "kesehatan" && $pass == "something"){
		$_SESSION['user'] = $user;
		header("Location: admin.php");
	} else {
        header("Location: login.php?err=1");
    }
?>