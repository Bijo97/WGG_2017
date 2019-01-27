<?php
	include "connection.php";
	
?>

<html>
<head>
<title>Form Konsumsi WGG 2017</title>
<link rel="shortcut icon" href="../images/logowgg.png" />
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>


<body>
<?php
$namaErr = $nrpErr = $keteranganErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["txtnama"])) {
    $namaErr = "Harap isi bidang nama!";
  } else {
    $txtnama = test_input($_POST["name"]);
  }
  
  if (empty($_POST["txtnrp"])) {
    $nrpErr = "Harap isi bidang NRP!";
  } else {
    $txtnrp = test_input($_POST["email"]);
  }

  if($_POST['keterangan'] == -1){
  	$keteranganErr = "Harap pilih salah satu pilihan!";
  } else {
  	$keterangan = test_input($_POST['keterangan']);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container">
		<!--<div class="col-md-8" style="margin-top:13%;border:0px solid red;border-radius:10px;">-->
			<form method="post" action="insert.php">	
				<table border=0 align=center style="margin-top:10%;">
					<tr >
						<td colspan=3 style="text-align:center;">
							<h3>FORM KONSUMSI</h3>
							<br>
						</td>
						
						
					</tr>
					<tr>
						<td width="20%">
						<h4>Name</h4>
						</td>
						<td style="padding-left:10px;" width="75%">
						<input type="text" class="form-control" name="txtnama" required placeholder="Your Name">
						</td>
						<td style="padding-left:10px;">
						<span class="error">* <?php echo $nrpErr;?></span>
						</td>
					</tr>
					<tr>
						<td>
						<br>
						</td>
					</tr>
					<tr>
						<td>
						<h4>NRP</h4>
						</td>
						<td style="padding-left:10px;">
						<input type="text" class="form-control" name="txtnrp" required placeholder="Your NRP">
						</td>
						<td style="padding-left:10px;">
						<span class="error">* <?php echo $nrpErr;?></span>
						</td>
					</tr>
					<tr>
						<td>
						<br>
						</td>
					</tr>
					
					<div class="radio">
						<tr>
							<td>
								<h4>Keterangan</h4>
							</td>
							<td style="padding-left:10px;">
							<div class="btn-group" data-toggle="buttons" >
							  <label class="btn btn-default">
								<input type="radio" name="keterangan" value="normal" autocomplete="off" style="">Normal
							  </label>
							  <label class="btn btn-default">
								<input type="radio" name="keterangan"  id="rdketerangan" title="Boleh Bawang, Telur, Susu dan Keju" value="vege" autocomplete="off"> Vege
							  </label>
							  <label class="btn btn-default">
								<input type="radio" name="keterangan" id="rdketeranganvegan" title="Tidak Boleh Bawang, Telur, Susu dan Keju" value="vegan" autocomplete="off"> Vegan
							  </label>
							</div>
							<td style="padding-left:10px;">
							<span class="error">* <?php echo $keteranganErr;?></span>
							</td>
							
							<!--<td style="padding-left:10px;">
								<input type="radio" name="keterangan" value="normal" checked > Normal</input>
							</td>
							-->
						</tr>
						
						<!--<tr>
						</td>
							<td rowspan=2>
							<td style="padding-left:10px;>
								<input type="radio" name="keterangan" id="rdketerangan" value="vege"  title="Tooltip on right"> Vege</input>
							</td>
						</tr>
						<tr>
							<td style="padding-left:10px;">
								<input type="radio" name="keterangan" value="vegan"> Vegan</input>
							</td>
						</tr>-->
					</div>
					<tr>
						<td>
						<br>
						</td>
					</tr>
					<tr>
						<td >
						<h4>Alergi</h4>
						</td>
						<td style="padding-left:10px;">
						<textarea class="form-control"  column="5"  name="txtalergi" placeholder="Boleh Kosong"></textarea>
						</td>
					</tr>
					<tr>
						<td>
						<br>
						</td>
					</tr>
					<tr>	
						<td colspan=3 style="text-align:center;">
							<input type="submit" class="btn btn-primary" name="btnsimpan" value="SAVE" onclick="display()">
						</td>
					</tr>
				</table>
			</form>
	</center>	

</div>
<script>
	function display()
{
var nama=document.details.txtnama.value;
var nrp=document.details.txtnrp.value;
var keterangan=document.details.keterangan.value;
var alergi=document.details.alergi.value;
alert("Nama: "+nama+"     "+"NRP :"+nrp+"     "+"Keterangan: "+keterangan+"Alergi: "+alergi);
}
</script>
</body>
</html>
<script type="text/javascript">
$(function () {
  $("#rdketerangan").tooltip();
})
$(function () {
  $("#rdketeranganvegan").tooltip();
})

</script>