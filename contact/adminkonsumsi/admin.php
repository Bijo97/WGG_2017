<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:../adminkonsumsi/login.php");
}
$nrp = substr($_SESSION['user'], 1);
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
					<b><a class="nav-link" href="../adminkonsumsi/logout.php">Logout</a></b>
				</li>
			</ul>
		</div>
	</nav>
	<center><h3 style="margin-top: 3%;">Panel Admin Konsumsi Panitia<br>Welcome Grateful Generation 2017</h3></center>
	<div class="container">
		<!--<div class="col-md-8" style="margin-top:13%;border:0px solid red;border-radius:10px;">-->
		<div class="col-10 offset-1"><br>	
			<select name="sakit" id="sakit" class="form-control" onchange="getData(this.value)">
				<option value="-">Pilih di bawah ini: </option>
				<?php
					/*$sql = "SELECT * FROM pertanyaan";
					$result = mysql_query($sql);
					while ($row = mysql_fetch_array($result)){
						echo "<option value='vege'>"vege"</option>";
					}*/
					echo "<option value='vege'>vege</option>";
					echo "<option value='vegan'>vegan</option>";
					echo "<option value='normal'>normal</option>";
					
				?>
			</select><br/>
			<div id="hasil"></div><br>
			<button type="button" name="export" id="export" class="btn btn-primary">Export to Excel</button>
		</div>
	</center>	

</div>
	<script src="jquery.table2excel.min.js"></script>
    <script>
      $("#export").click(function(){
        $("#tabel").table2excel({
          name: $('h4').text(),
          filename: $('h4').text(),
          fileext: ".xls"
        });
      });
    </script>
</body>
</html>