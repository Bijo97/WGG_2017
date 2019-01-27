<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<form action="simpan.data.php" method="POST">
<input type="hidden" name="nrp" value="<?php echo $_GET['nrp']; ?>">
<?php
	$con = mysql_connect("localhost", "std_wggpetra_it", "Martabakmanis15");
	mysql_select_db("std_wggpetra_2017", $con);
	$nrp = $_GET['nrp'];
	$kueri = mysql_query("SELECT * FROM almamuts WHERE nrp = '$nrp'");
	$row = mysql_fetch_array($kueri);

	if ($row['id'] != "") {
	
	echo "<br/><br/><br/><center>NAMA : ".$row['nama']."</center>";
	echo "<br/><center>NRP  : ".$_GET['nrp']."</center>";
	?>

	<br/>
	<div class="container" style="width: 40%;">
	<div class="table-responsive">
	<table class="table">
		<tr>
			<td style="width: 125px;"><center>Jaket</center></td>
			<td style="width: 125px;"><center>Muts</center></td>
			<td><center>Save ?</center></td>
		</tr>
		<tr>
		<?php
			echo '<td style="width: 100px;"><center>'.$row['jaket'].'</center></td>';
			echo '<td style="width: 100px;"><center>'.$row['muts'].'</center></td>';
			echo "<td></td>";
		?>
		</tr>
		<tr>
		<?php
			if($row['_jaket'] == 1){?>
			<td><input type="checkbox" class="form-control" style="width: 20px; margin: 0 auto;" name="jaket" value="1" checked></td>
		<?php }else{ ?>
			<td><input type="checkbox" class="form-control" style="width: 20px; margin: 0 auto;" name="jaket" value="0"></td>
		<?php } ?>

		<?php
			if($row['_muts'] == 1){ ?>
			<td><input type="checkbox" class="form-control" style="width: 20px; margin: 0 auto;" name="muts" value="1" checked></td>
		<?php }else{ ?>
			<td><input type="checkbox" class="form-control" style="width: 20px; margin: 0 auto;" name="muts" value="0"></td>
		<?php } ?>

			
			<td><input type="submit" class="form-control" style="width: 100px; margin: 0 auto;" name="submit" value="Yes"></td>
		</tr>
	</table>
	</div>
	</div>

	<?php }
	else{
		echo "<br/><p><b><center>Tidak ada data</center></b></p>";
	}
?>
</form>