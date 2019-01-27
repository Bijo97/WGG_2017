<?php
	session_start();
	include "connect.php";
	$nrp = $_SESSION['nrp'];

	function validate_data($data)
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = strip_tags($data);
		  $data = htmlspecialchars($data);
		  $data = strtoupper($data);
		  return $data;    
		}
		 
		$sakit = $_POST['sakit'];
		$nomer = $_POST['nomerp'];
		$text = "";

		for ($i=0; $i<count($sakit); $i++){
			$text = $text."Penyakit ke ".$nomer[$i].": ".$sakit[$i]."<br/>";
		}
		// echo "UPDATE form_kesehatan SET keterangan = '".$text."' WHERE nrp = '$nrp'";
		$sql = "UPDATE form_kesehatan SET keterangan = '".$text."' WHERE nrp = '".$nrp."'";
		$result = mysql_query($sql);

		if ($result){
			header("Location: home.php");
		}
?>