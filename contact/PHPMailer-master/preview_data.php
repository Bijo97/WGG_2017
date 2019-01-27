<?php
	include "cek_isi.php";
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'assets.header.php';?>
    <title>Isi Data Peserta</title>
    
	<!--Core CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <!-- Custom styles for this template -->
    <!--<link href="style.css" rel="stylesheet">-->
    <link href="css/style-responsive.css" rel="stylesheet">

    <!--Upload Form-->
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>
    <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
	
	
	<link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		
	
  </head>
<body>
	<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IC 2016</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="header_part1" id="head">
				<div class="overlay">
					<div class="start_part">	
							<div class="container">
								<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 style="color: green; text-align: center;">Semua data sudah terisi</h2><br>
						
						<form class="form-horizontal" role="form" method="POST" action="send.php">
							<p><center><strong>Data Anggota Pertama</strong></center></p>
							<div class="form-group">
								<label class="col-md-6 control-label">Nama:</label>
								<label class="control-label"><?php echo $row['nama_anggota1']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">No Telp:</label>
								<label class="control-label"><?php echo $row['nohp1']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Kelas:</label>
								<label class="control-label"><?php echo $row['kelas_anggota1']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Vegetarian / Vegan:</label>
								<label class="control-label"><?php if ($row['vege1'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Alergi:</label>
								<label class="control-label"><?php if ($row['alergi1'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>
							<div class="form-group">
								<label class="col-md-6 control-label">Penyakit:</label>
								<label class="control-label"><?php if ($row['penyakit1'] == NULL){echo "Tidak ada";} else {echo $row['penyakit1'];} ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Obat:</label>
								<label class="control-label"><?php if ($row['obat1'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>

							<br><p><center><strong>Data Anggota Kedua</strong></center></p>
							<div class="form-group">
								<label class="col-md-6 control-label">Nama:</label>
								<label class="control-label"><?php echo $row['nama_anggota2']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">No Telp:</label>
								<label class="control-label"><?php echo $row['nohp2']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Kelas:</label>
								<label class="control-label"><?php echo $row['kelas_anggota2']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Vegetarian / Vegan:</label>
								<label class="control-label"><?php if ($row['vege2'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Alergi:</label>
								<label class="control-label"><?php if ($row['alergi2'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>
							<div class="form-group">
								<label class="col-md-6 control-label">Penyakit:</label>
								<label class="control-label"><?php if ($row['penyakit2'] == NULL){echo "Tidak ada";} else {echo $row['penyakit2'];} ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Obat:</label>
								<label class="control-label"><?php if ($row['obat2'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>

							<br><p><center><strong>Data Anggota Ketiga</strong></center></p>
							<div class="form-group">
								<label class="col-md-6 control-label">Nama:</label>
								<label class="control-label"><?php echo $row['nama_anggota3']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">No Telp:</label>
								<label class="control-label"><?php echo $row['nohp3']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Kelas:</label>
								<label class="control-label"><?php echo $row['kelas_anggota3']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Vegetarian / Vegan:</label>
								<label class="control-label"><?php if ($row['vege3'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Alergi:</label>
								<label class="control-label"><?php if ($row['alergi3'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>
							<div class="form-group">
								<label class="col-md-6 control-label">Penyakit:</label>
								<label class="control-label"><?php if ($row['penyakit3'] == NULL){echo "Tidak ada";} else {echo $row['penyakit3'];} ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Obat:</label>
								<label class="control-label"><?php if ($row['obat3'] == 1){echo "Ya";} else {echo "Tidak";} ?></label>
							</div>

							<br><div class="form-group">
								<label class="col-md-6 control-label">Sekolah:</label>
								<label class="control-label"><?php echo $row['sekolah']; ?></label>
							</div>

							<div class="form-group">
								<label class="col-md-6 control-label">Email:</label>
								<label class="control-label"><?php echo $row['email']; ?></label>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
							</div>	
				</div>
			</div>	
		</div>
	</div>
	<!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/script.js"></script>


        <script>
		    $(document).ready(function() {
		        $("#test-upload").fileinput({
		            'showPreview' : false,
		            'allowedFileExtensions' : ['jpg', 'png','gif'],
		            'elErrorContainer': '#errorBlock'
		        });
		        /*
		        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
		            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
		        });
		        */
		    });

        </script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->


</html>
