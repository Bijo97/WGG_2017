<?php
if (isset($_GET['status'])){
	if ($_GET['status'] == 3){
		echo "<script>alert('Pesan anda sudah terkirim...');</script>";
	} else if ($_GET['status'] == 4){
		echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
	}
}
session_start();
$_SESSION['page'] = "navcontact";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<link rel="shortcut icon" href="../images/logowgg.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome Grateful Generation 2017</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script>
    	function enableBtn(){
		   $('#submitBtn').removeAttr('disabled');
		}
		function validationForm() {
			var cek = 0;
			var fullname = document.getElementById("fullname").value;
			var pac = document.getElementById("pac").value;
			var nohp = document.getElementById("nohp").value;
			var kategori = document.getElementById("kategori").value;
			var mail = document.getElementById("mail").value;
			var subject = document.getElementById("subject").value;
			var isi = document.getElementById("isi").value;
			if (fullname == "" || pac == "" || nohp == "" || kategori == "-" || mail == "" || subject == "" || isi == "") {
				alert("Semua data harus diisi!");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<?php include "navbar.php";?>
	<br>
	<br>
	<h3><p align="center"><br><br><b> CONTACT US </b></p></h3>
	<div id="contact">
		<div class="container">
		<form action="insert_contact.php" method="POST" onsubmit="return validationForm()">
	        <div class="form-group">
	          <div class="row">
	          	<div class="col-md-6">
	          		<label for="exampleInputEmail1">Nama Lengkap</label>
	          		<input type="text" name="nama" class="form-control" id="fullname" placeholder="Nama Lengkap" required>
	          	</div>
	          	<div class="col-md-6">
	          		<label for="exampleInputNRP">No. PAC</label>
	              	<input type="text" name="pac" class="form-control" id="pac" placeholder="PAC" required>
	          	</div>
	          </div>
	        </div>
	        <div class="form-group">
	          <div class="row">
	            <div class="col-md-6">
	              <label for="exampleInputPassword1">No. Telepon</label>
	              <input type="number" name="nohp" class="form-control" id="nohp" placeholder="Nomor Telepon">
	            </div>
	            <div class="col-md-6">
	              <label for="exampleInputPassword1">Kategori</label>
	              <select class="form-control" name="kategori" id="kategori">
	              	<option value="-">Pilih Kategori</option>
	              	<option value="1">Jadwal Kegiatan</option>
	              	<option value="2">Peraturan dan Ketentuan</option>
	              	<option value="3">Lain-lain</option>
	              </select>
	            </div>
	          </div>
	        </div>
	        <div class="form-group">
	          <label for="exampleInputPassword1">Alamat Email</label>
	          <input name="email" type="email" class="form-control" id="mail" placeholder="Alamat Email" required>
	        </div>
	        <div class="form-group">
	          <label for="exampleInputPassword1">Judul</label>
	          <input name="subject" type="text" class="form-control" id="subject" placeholder="Judul Pesan" required>
	        </div>
	        <div class="form-group">
	          <label for="exampleInputPassword1">Isi Pesan</label>
	          <textarea name="pesan" id="isi" class="form-control" rows="4" placeholder="Isi Pesan" required></textarea>
	        </div>
	        <div class="form-group">
	          <p><center>Note : Agar dapat submit, silahkan verifikasi captcha terlebih dahulu.</center></p>
	          <label for="inputPassword3" class="col-md-4">Human Verification</label>
	          <div class="col-md-12">
	           <div class="col-md-6 col-sm-offset-4">
	             <div class="g-recaptcha" data-callback="enableBtn" data-sitekey="6LdjwSAUAAAAAGeVMXiqV8xbcxJEIn2kh4Wl2Pwd"></div>
	           </div>
	         </div>
	       </div>
	       <div class="form-group">
	        <button type="submit" class="btn btn-primary pull-right" id="submitBtn" disabled>Submit</button><br/>
	        </div>
	      </form>
	    </div>
	</div>
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="js/animasi.js"></script> -->
	<script src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#<?php echo $_SESSION['page'];?>').addClass('active');
		$("#click").click(function (){
	        $('html, body').animate({
	            scrollTop: $("#content").offset().top - 90
	        }, 500);
	    });
	    if ($( window ).width() <= 500) {
			$('#desktop').hide();
			$('#mobile').show();
		} else {
			$('#desktop').show();
			$('#mobile').hide();
		}
		$("html").niceScroll({
        	zindex: 5
        });
	});
	$(window).on('resize', function(){
		if ($( window ).width() <= 500) {
			$('#desktop').hide();
			$('#mobile').show();
		} else {
			$('#desktop').show();
			$('#mobile').hide();
		}
	});
	$(function() {
		$('a[href*=#]').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		});
	});
	</script>
</body>
</html>