<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:https://wgg.petra.ac.id/loginkeamanan/login.php");
}
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Data Rekap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<script src="//code.jquery.com/jquery-1.12.4.js"></script> <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>
    	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      	<li class="nav-item">
				<a class="nav-link" href="rekap_wgg.php">Rekap Keamanan WGG</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="view.php">View Data</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view_total.php">View Total Rekap<span class="sr-only">(current)</span></a>
			</li>
	    </ul>
	    <ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Selamat datang, <?php echo $nama;?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="../loginkeamanan/logout.php">Logout</a>
		        </div>
		    </li>
		</ul>
	  </div>
	</nav>
	<center><h3 style="margin-top: 3%;">Rekap Keamanan<br>Welcome Grateful Generation 2017</h3></center>
<div class="container">
	<div class ="row">
		<table class="table table-bordered" id="view">
		<thead>
			<tr>
				<th>No</th>
				<th>NRP</th>
				<th>Tanggal</th>
				<th>Pelanggaran</th>
				<th>Poin</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<form action = "delete.php" method="post">
		<?php 
		include "connect.php";
		$sql = "SELECT * FROM Keamanan";
		$result = mysql_query($sql);
		$i = 1;
		while ($row = mysql_fetch_array($result))
		{
			echo"
				<tr>
					<td width = 100px>".$i."</td>
					<td width = 200px>".$row['nrp']."</td>
					<td width = 200px>".$row['tanggal']."</td>
					<td width = 200px>".$row['pelanggaran']."</td>
					<td width = 200px>".$row['poin']."</td>
					<td align='center'>";
			echo"<a href='delete.php?id=".$row['id']."'><button type='button' name='delete' value='delete' class='btn btn-danger'>Delete</button></a> 
			</td>
				</tr>";
			$i++;
		}
		?>
		</form>
		</tbody>
		</table>
	</div>
</div>
<script>
$("#view").dataTable();
</script>
</body>
</html>
