<?php
	if (isset($_GET['status'])){
		if ($_GET['status'] == 3){
			echo "<script>alert('Pesan anda sudah terkirim...');</script>";
		} else if ($_GET['status'] == 4){
			echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
		}
	}
	session_start();
	$_SESSION['page'] = "navnews";
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
  </head>
  <body>
    <?php include "navbar.php";?>
	<div id="news" style="height: 100%;">
		<div class="container">
			<h4>News</h4>
			<div class="row">
				<div class="col">
					<h5>Welcome Grateful Generation 2017</h5>
				</div>
				<div class="col-8">
					<ul>
						<li>
							<p><a class="red title" data-toggle="collapse" href="#berita2" aria-expanded="false" aria-controls="collapseExample">Reset Form Konsumsi dan Kesehatan</a></p>
							<div class="collapse" id="berita2">
								Seluruh mahasiswa baru peserta WGG 2017 harap memeriksa kembali status data form konsumsi dan form kesehatan anda <a href="https://wgg.petra.ac.id/login/login.php">disini</a> karena kami melakukan reset data untuk beberapa mahasiswa baru. Apabila masih terjadi kesalahan dapat menghubungi kami melalui forum contact us di website wgg. Terima kasih atas kerja samanya dan mohon maaf atas kesalahan teknis ini, Tuhan Yesus memberkati.</a>
							</div>
						</li>
						<li>
							<p><a class="title" data-toggle="collapse" href="#berita2" aria-expanded="false" aria-controls="collapseExample">Pengisian Form Konsumsi dan Kesehatan</a></p>
							<div class="collapse" id="berita2">
								Harap setiap mahasiswa baru mengecek status pengisian form konsumsi dan kesehatannya <a href="https://wgg.petra.ac.id/login/login.php">disini</a>
							</div>
						</li>
						<li>
							<p><a class="title" data-toggle="collapse" href="#berita1" aria-expanded="false" aria-controls="collapseExample">Pengumuman penting</a></p>
							<div class="collapse" id="berita1">
								Harap memperhatikan pengumuman di bawah ini:
							    <ul>
							    	<li>Peraturan Mahasiswa Baru WGG 2017</li>
							    	<li>Peraturan Barang Bawaan WGG 2017</li>
							    	<li>Ketentuan Berpakaian Upacara Bendera</li>
							    	<li>Surat Untuk Orang Tua Mahasiswa Baru</li>
							    </ul>
							    <p>Detail pengumuman dapat dilihat <a href="https://wgg.petra.ac.id/login/login.php">disini</a></p>
							</div>
						</li>
						
						<!-- <li>
							<p><a class="red title" href="#" data-toggle="modal" data-target="#berita1" style="color:red !important;">Pembagian Shift Briefing WGG 2017</a></p>
							<div class="modal fade" id="berita1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Pembagian Shift Briefing WGG 2017 (Senin, 24 Juli 2017)</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <table class="table table-bordered table-hover text-center">
								    	<thead>
									    	<tr style="background-color: #e2e2e2;">
									    		<th>
									    			<center><span class="red">Shift 1</span>: Jam 08.00</center>
									    		</th>
									    	</tr>
								    	</thead>
								    	<tbody>
								    		<tr><td>Teknik Sipil</td></tr>
								    		<tr><td>Manajemen Keuangan</td></tr>
								    		<tr><td>Sastra Tionghoa</td></tr>
								    		<tr><td>Arsitek</td></tr>
								    		<tr><td>Ilmu Komunikasi</td></tr>
								    		<tr><td>International Business Management</td></tr>
								    	</tbody>
								    </table>
								    <table class="table table-bordered table-hover text-center">
								    	<thead>
									    	<tr style="background-color: #e2e2e2;">
									    		<th>
									    			<center><span class="red">Shift 2</span>: Jam 10.30</center>
									    		</th>
									    	</tr>
								    	</thead>
								    	<tbody>
								    		<tr><td>Desain Komunikasi Visual</td></tr>
								    		<tr><td>Digital Media</td></tr>
								    		<tr><td>Manajemen Perhotelan</td></tr>
								    		<tr><td>Manajemen Pariwisata</td></tr>
								    		<tr><td>Sastra Inggris</td></tr>
								    		<tr><td>English for Creative Industry</td></tr>
								    		<tr><td>Teknik Elektro</td></tr>
								    		<tr><td>Teknik Mesin</td></tr>
								    		<tr><td>Teknik Otomotif</td></tr>
								    		<tr><td>Teknik Informatika</td></tr>
								    		<tr><td>Sistem Informasi Bisnis</td></tr>
								    	</tbody>
								    </table>
								    <table class="table table-bordered table-hover text-center">
								    	<thead>
									    	<tr style="background-color: #e2e2e2;">
									    		<th>
									    			<center><span class="red">Shift 3</span>: Jam 13.00</center>
									    		</th>
									    	</tr>
								    	</thead>
								    	<tbody>
								    		<tr><td>Manajemen Bisnis</td></tr>
								    		<tr><td>Teknik Industri</td></tr>
								    		<tr><td>International Business Engineering</td></tr>
								    		<tr><td>Manajemen Pemasaran</td></tr>
								    		<tr><td>Akuntansi Pajak</td></tr>
								    		<tr><td>Akuntansi Bisnis</td></tr>
								    		<tr><td>International Business Accounting</td></tr>
								    		<tr><td>Design Interior</td></tr>
								    		<tr><td>Pendidikan Guru Sekolah Dasar</td></tr>
								    	</tbody>
								    </table>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
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
    </script>
  </body>
</html>