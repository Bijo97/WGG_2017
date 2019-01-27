<?php
	include "connect.php";
	$nrp = $_POST['nrp'];
	$tanggal = $_POST['tanggal'];
	$pasal = $_POST['pasal'];
	for ( $i= 0 ; $i < count($pasal); $i++ )
	{
		if ( strpos($pasal[$i],"1") === 0 ) 
		{	
			$poin = 150;
			$token = strtok($pasal[$i], "1-");
		}
		elseif ( strpos($pasal[$i],"2") === 0 )
		{
			$poin = 200;
			$token = strtok($pasal[$i], "2-");
		}
		elseif ( strpos($pasal[$i],"3") === 0 )
		{
			$poin = 150;
			$token = strtok($pasal[$i], "3-");
		}
		elseif ( strpos($pasal[$i],"4") === 0 )
		{
			$poin = 200;
			$token = strtok($pasal[$i], "4-");
		}
		elseif ( strpos($pasal[$i],"5") === 0 )
		{
			if ( $pasal[$i] == "5-Bicara Kotor")
			{
				$poin = 500;
			}
			else
			{
				$poin = 350;
			}
			$token = strtok($pasal[$i], "5-");
		}
		elseif ( strpos($pasal[$i],"6") === 0 )
		{
			$poin = 100;
			$token = strtok($pasal[$i], "6-");
		}
		elseif ( strpos($pasal[$i],"7") === 0 )
		{
			$poin = 100;
			$token = strtok($pasal[$i], "7-");
		}
		elseif ( strpos($pasal[$i],"8") === 0 )
		{
			$poin = 400;
			$token = strtok($pasal[$i], "8-");
		}
		else
		{
			$poin = 9999;
			$token = strtok($pasal[$i], "9-");
		}
		$sql = mysql_query("INSERT INTO Keamanan(nrp,tanggal,pelanggaran,poin) VALUES ( '$nrp', '$tanggal', '$token', '$poin')");
	}
	if (!$sql)
	{
		echo "Error";
	}
	else
	{
		header('Location: https://wgg.petra.ac.id/Keamanan/rekap_wgg.php');
	}
?>