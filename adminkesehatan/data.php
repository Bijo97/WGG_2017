<?php
	include "connect.php";
	$sakit = $_GET['sakit'];
	$i = 1;

	if ($sakit != "-"){
		$query2 = "SELECT * FROM kesehatan_panitia WHERE p".$sakit." = 1"; 
		$hasil2 = mysql_query($query2);
		
		$kueri = mysql_query("SELECT pertanyaan FROM pertanyaan WHERE no_soal = ".$sakit);
		$row = mysql_fetch_array($kueri);
		echo "<center><h4>".$row['pertanyaan']."</h4></center>
			<table class='table table-striped' id='tabel'>
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>NRP</th>
						<th>Keterangan</th>
					</tr>
				</thead>";

		while ($row = mysql_fetch_array($hasil2)){
			echo "<tbody>
						<tr>
							<td>".$i."</td>
							<td>".$row['nama']."</td>
							<td>".$row['nrp']."</td>
							<td>".$row['keterangan']."</td>
						</tr>
					</tbody>";
			$i++;
		}
		
		echo "</table>";
	}
?>