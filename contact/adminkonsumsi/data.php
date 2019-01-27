<?php
	include "connect.php";
	$sakit = $_GET['sakit'];
	$i = 1;

	if ($sakit != "-"){
		$query2 = "SELECT * FROM vege_vegan WHERE ".$sakit." = vege"; 
		$hasil2 = mysql_query($query2);
		
		$kueri = mysql_query("SELECT pertanyaan FROM vege_vegan WHERE keterangan = ".$sakit);
		$row = mysql_fetch_array($kueri);
			echo"<table class='table table-striped' id='tabel'>
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>NRP</th>
						<th>Keterangan</th>
						<th>Alergi</th>
					</tr>
				</thead>";""

		while ($row = mysql_fetch_array($hasil2)){
			echo "<tbody>
						<tr>
							<td>".$i."</td>
							<td>".$row['nrp']."</td>
							<td>".$row['nama']."</td>
							<td>".$row['keterangan']."</td>
							<td>".$row['alergi']."</td>
						</tr>
					</tbody>";
			$i++;
		}
		
		echo "</table>";
	}
?>