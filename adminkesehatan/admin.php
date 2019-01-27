<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:login.php");
}
?>
<html>
<head>
	<link rel="shortcut icon" href="../images/logowgg.png" />
	<title>Panel Panitia WGG 2017</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function validate(){
			return confirm('Yakin Mau LogOut?');
		}

		function getData(str){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("hasil").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET", "data.php?sakit=" + str, true);
	        xmlhttp.send();
		}
	</script>
</head>


<body>
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<div class="container">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="admin.php">Panitia</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="adminpeserta.php">Peserta</a>
				</li>
			</ul>
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item">
					<b><a class="nav-link" href="../adminkesehatan/logout.php">Logout</a></b>
				</li>
			</ul>
		</div>
	</nav>
	<center><h3 style="margin-top: 3%;">Panel Admin Kesehatan Panitia<br>Welcome Grateful Generation 2017</h3></center>
		<!--<div class="col-md-8" style="margin-top:13%;border:0px solid red;border-radius:10px;">-->
		<div><br>	
			<!-- <select name="sakit" id="sakit" class="form-control" onchange="getData(this.value)">
				<option value="-">Pilih salah satu penyakit di bawah ini: </option> -->
				<?php
					// $sql = "SELECT * FROM pertanyaan";
					// $result = mysql_query($sql);
					// while ($row = mysql_fetch_array($result)){
					// 	echo "<option value='".$row['no_soal']."'>".$row['pertanyaan']."</option>";
					// }
					$i = 1;

						$query2 = "SELECT * FROM kesehatan_panitia"; 
						$hasil2 = mysql_query($query2);
						
						echo "<table class='table table-striped' id='tabel'>
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama</th>
										<th>NRP</th>";
								for ($j = 1; $j <= 53; $j++){
									echo "<th>P".$j."</th>";
								}
									echo "<th>Keterangan</th>
									</tr>
								</thead>";

						while ($row = mysql_fetch_array($hasil2)){
							echo "<tbody>
										<tr>
											<td>".$i."</td>
											<td>".$row['nama']."</td>
											<td>".$row['nrp']."</td>";
									for ($j = 1; $j <= 53; $j++){
										echo "<td>".$row['p'.$j]."</td>";
									}
										echo "<td>".$row['keterangan']."</td>
										</tr>
									</tbody>";
							$i++;
						}
						
						echo "</table>";
				?>
			<!-- </select><br/> -->
			<div id="hasil"></div><br>
			<button type="button" name="export" id="export" class="btn btn-primary">Export to Excel</button>
		</div>
	</center>	

	<script src="jquery.table2excel.min.js"></script>
    <script>
      $("#export").click(function(){
        $("#tabel").table2excel({
          name: "Data Kesehatan Panitia",
          filename: "Data Kesehatan Panitia",
          fileext: ".xls"
        });
      });
    </script>
</body>
</html>