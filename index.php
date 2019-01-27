<?php
	header("Location: https://wgg.petra.ac.id/home.php");
	if (isset($_GET['status'])){
		if ($_GET['status'] == 3){
			echo "<script>alert('Pesan anda sudah terkirim...');</script>";
		} else if ($_GET['status'] == 4){
			echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
		}
	}
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
    	body {
    		background-image: url("images/background/background2.png");
    		background-position: left center;
    		background-repeat: repeat-y;
    		background-size: 5%;
    		font-size: 18px;
    	}
    	.bg-faded{
    		background-color: #FFFFFF !important;
    	}
		.parallax { 
		    /* The image used */
		    background-image: url("images/background/background1.png");

		    /* Set a specific height */
		    min-height: 100vh;
		    width: 100%; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}
		#news {
			padding-top: 30px;
			min-height: 100px;
		}
		.red {
			color: red !important;
		}
		.title {
			font-size: 20px;
		}
	</style>
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
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded sticky-top">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="https://wgg.petra.ac.id"><img src="images/logoukp.png" style="width: 25px; height: 25px;"><img src="images/logowgg.png" style="width: 25px; height: 25px;"> Welcome Grateful Generation 2017</a>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto" id="navbar-wgg">
		      <li class="nav-item">
		        <a class="tHome nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="tNews nav-link" href="#news">News</a>
		      </li>
		      <li class="nav-item">
		        <a class="tTimeline nav-link" href="#timeline">Timeline</a>
		      </li>
		      <li class="nav-item">
		        <a class="tContact nav-link" href="#contact">Contact Us</a>
		      </li>
		      <!-- <li class="nav-item">
		        <a class="nav-link" href="#contact">MyBoard</a>
		      </li> -->
		      <li class="nav-item">
		        <a class="nav-link" href="http://www.instagram.com/wgg2017" target=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
		      </li>
		    </ul>
		</div>
	</nav>
	<div id="home" class="parallax"></div>
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
							<p><a class="red title" data-toggle="collapse" href="#berita1" aria-expanded="false" aria-controls="collapseExample">Pengumuman penting</a></p>
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
						<li>
							<p><a class="red title" data-toggle="collapse" href="#berita2" aria-expanded="false" aria-controls="collapseExample">Pengisian Form Konsumsi dan Kesehatan</a></p>
							<div class="collapse" id="berita2">
								Harap setiap mahasiswa baru mengecek status pengisian form konsumsi dan kesehatannya <a href="https://wgg.petra.ac.id/login/login.php">disini</a>
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
	<div id="timeline">
		<div class="container">
			<h4>Timeline</h4>
			<div class="row">
				<div class="col">
					<h5>Welcome Grateful Generation 2017</h5>
					<h5 style="color: red;">Wajib untuk seluruh mahasiswa baru</h5>
				</div>
			</div>
			<div class="col-12">
				<table>
					<!-- KTM -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">03</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2"> - </td>
						<td style="font-size: 50px;" rowspan="2">14</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Pemotretan Mahasiswa Baru untuk Kartu Tanda Mahasiswa (KTM).<br/>Untuk pembagian jadwal pemotretan silahkan dilihat <a href="http://definitif-online.petra.ac.id/JadwalMahasiswaBaru/tabid/72/Default.aspx" target="_blank">disini</a></td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Tes Kesehatan -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">29</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juni</td>
						<td style="font-size: 50px;" rowspan="2"> - </td>
						<td style="font-size: 50px;" rowspan="2">20</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Tes Kesehatan Mahasiswa Baru di Laboratorium PARAHITA.<br/>Untuk mendownload surat pengantar tes kesehatan, silahkan login <a href="http://definitif-online.petra.ac.id/PengumumanPenerimaan/tabid/36/ctl/Login/Default.aspx?returnurl=%2fJadwalMahasiswaBaru%2ftabid%2f72%2fDefault.aspx" target="_blank">disini</a><br>
						Untuk keterangan lebih lanjut mengenai tes kesehatan, silahkan klik <a href="#" data-toggle="modal" data-target="#myModal">disini</a></td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Jadwal Tes Kesehatan Mahasiswa Baru 2017 Di LABORATORIUM PARAHITA (http://www.labparahita.com)</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
						      <b>PERSYARATAN</b> Mahasiswa <b>WAJIB</b>:
						      <ol>
						      	<li>Menunjukkan KTP / Kartu Pelajar / Kartu Definitif.</li>
						      	<li>Menyerahkan "Surat Pengantar Tes Kesehatan" kepada petugas Laboratorium yang bertugas. Surat Pengantar dapat dicetak melalui situs Definitif Mahasiswa Baru UK Petra.</li>
						      	<li>TIDAK PERLU MEMBAYAR biaya tes kepada Laboratorium.</li>
						      	<li>Hasil tes kesehatan dalam bentuk HARDCOPY (tercetak) adalah milik Mahasiswa, untuk itu boleh diambil oleh Mahasiswa. Hasil tes kesehatan berupa SOFTCOPY akan dikirimkan ke UK Petra.</li>
						      </ol>
						      <b>Catatan Penting!</b>
						      <ol>
						      	<li>Tes Kesehatan ini WAJIB dilakukan oleh Mahasiswa Baru 2017 di Laboratorium PARAHITA;  UK Petra tidak menerima hasil tes kesehatan yang dilakukan oleh Mahasiwa Baru 2017 diluar ketentuan yang sudah ditetapkan dengan alasan apapun; Jenis tes kesehatan yang akan dilakukan adalah Hematologi Lengkap, Urine Lengkap, Fungsi Liver, Fungsi Ginjal, ECG dan Thorax.</li>
						      	<li>Mahasiswa Baru 2017 melakukan Tes Kesehatan pada jadwal yang telah ditentukan yaitu: 
						      		<ul>
						      			<li>29 Juni s/d 16 Juli 2017 (untuk mahasiswa yang di kotanya ada cabang Lab. PARAHITA)</li>
						      				<ul>
						      					<li>SURABAYA, BANYUWANGI, JEMBER, SOLO, TANGERANG, BANDUNG, JAKARTA, YOGYAKARTA, MAKASSAR, BEKASI, SIDOARJO, GRESIK, MALANG, TUBAN (untuk alamat lengkap, silahkan melihat situs resmi LABORATORIUM PARAHITA)</li>
						      					<li>Disarankan agar mahasiswa mengatur waktu untuk melakukan tes kesehatan ini memperhatikan kapasitas laboratorium per hari dan banyaknya mahasiswa yang perlu tes.</li>
						      				</ul>
						      			<li>17 - 20 Juli 2017 (untuk mahasiswa yang di kotanya tidak ada cabang Laboratorium) sehingga mahasiswa dapat melakukan tes kesehatan di Surabaya, menjelang Orientasi Mahasiswa Baru UK Petra.</li>
						      			<li>Di LUAR dari batas waktu yang ditentukan, Mahasiswa Baru tidak diperkenankan melakukan Tes Kesehatan untuk keperluan Orientasi Mahasiswa Baru, sesuai dengan nota kerjasama antara Laboratorium Parahita dengan UK Petra, kecuali untuk kepentingan pribadi.</li>
						      		</ul>
						      	</li>
						      	<li>Setiap lokasi Laboratorium memiliki kapasitas layanan per hari. Untuk itu diharapkan mahasiswa dapat berkoordinasi dengan Laboratorium PARAHITA setempat untuk mengatur waktu melakukan tes kesehatan sehingga tidak berbenturan dengan peserta lainnya (bisa di telpon terlebih dahulu untuk janjian waktu).</li>
						      	<li>Hasil tes pemeriksaan laboratorium <b>TIDAK MEMPENGARUHI</b> proses penerimaan Mahasiswa, karena anda yang sudah memiliki NRP (Nomor Registrasi Pokok), berarti SUDAH diterima menjadi mahasiswa UK Petra.</li>
						      	<li>Mahasiswa baru juga diminta untuk mengisi Form Catatan Kesehatan yang akan disiapkan oleh panitia di situs WGG 2017 (http://wgg.petra.ac.id) . Form Catatan Kesehatan tersebut harap dibawa dan dikumpulkan saat Pertemuan Orang Tua atau Briefing Mahasiswa.</li>
						      </ol>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- RC -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2"> - </td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Remidial Courses (RC) - Bridging Program</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Sarasehan -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">21</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">22</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Pertemuan Orang Tua Mahasiswa Baru<br/>Untuk melihat <b>pembagian shift hari pertama dan kedua</b>, silahkan klik <a href="#" data-toggle="modal" data-target="#pembagian">disini</a></td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Briefing -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">24</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Briefing Welcome Grateful Generation 2017</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Pra -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">25</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">28</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Pra Welcome Grateful Generation 2017<br/>Pengenalan Perpus, Pengenalan Sistem Informasi Mahasiswa, dan Tes Kepribadian & Tes Potensi Karir</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<?php
						$tgl = array(31,1,2,3,4);
						for ($i = 0; $i < 5; $i++) {
					?>
					<!-- H -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2"><?php echo $tgl[$i];?></td>
					<?php if ($i == 0) { ?>
						<td style="vertical-align: bottom;">Juli</td>
					<?php } else { ?>
						<td style="vertical-align: bottom;">Agustus</td>
					<?php } ?>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Day <?php echo $i+1; ?> Welcome Grateful Generation 2017</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<?php } ?>
					<!-- H -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">7</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Day 6 Welcome Grateful Generation 2017</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Freshmen -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">08</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Agustus</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">10</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">"<i><b>Freshmen Welcome Gathering</b></i>" tiap Prodi/Program</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Lat -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">11</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Agustus</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">12</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Latihan Upacara Bendera</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Kul -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">14</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Masuk Perkuliahan</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Upacara -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">17</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Upacara Bendera</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
				</table>
				<div class="modal fade" id="pembagian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Pembagian Shift Pertemuan Orang Tua Mahasiswa Baru</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <table class="table table-bordered text-center shiftbriefing" style="font-size: 15px;" border="1">
				        	<tr>
				        		<td colspan="3" style="background-color: grey;"><b>JUMAT, 21 JULI 2017</b></td>
				        	</tr>
				        	<tr>
				        		<td>Program Studi</td>
				        		<td>Waktu</td>
				        		<td>Tempat</td>
				        	</tr>
				        	<tr>
				        		<td>DESAIN KOMUNIKASI VISUAL - DIGITAL MEDIA</td>
				        		<td rowspan="4" style="vertical-align: middle;">08.00 - 10.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK MESIN - OTOMOTIF</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>ILMU KOMUNIKASI</td>
				        		<td>T - 501</td>
				        	</tr>
				        	<tr>
				        		<td>DESAIN INTERIOR</td>
				        		<td>P - 703-704</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK SIPIL</td>
				        		<td rowspan="4" style="vertical-align: middle;">12.00 - 14.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>SASTRA INGGRIS - ENGLISH FOR CREATIVE INDUSTRY</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN KEPARIWISATAAN</td>
				        		<td>T - 501</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK ELEKTRO</td>
				        		<td>P-709</td>
				        	</tr>
				        	<tr>
				        		<td>ARSITEKTUR</td>
				        		<td rowspan="4" style="vertical-align: middle;">15.30 - 17.30</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN PEMASARAN</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>PENDIDIKAN GURU SEKOLAH DASAR</td>
				        		<td>Ruang Konferensi III</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK INFORMARTIKA - SISTEM INFORMASI BISNIS</td>
				        		<td>T - 502</td>
				        	</tr>
				        	<tr>
				        		<td colspan="3" style="background-color: grey;"><b>SABTU, 22 JULI 2017</b></td>
				        	</tr>
				        	<tr>
				        		<td>Program Studi</td>
				        		<td>Waktu</td>
				        		<td>Tempat</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN PERHOTELAN</td>
				        		<td rowspan="5" style="vertical-align: middle;">08.00 - 10.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK INDUSTRI</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>AKUNTANSI PAJAK</td>
				        		<td>T - 502</td>
				        	</tr>
				        	<tr>
				        		<td>INTERNATIONAL BUSINESS MANAGEMENT</td>
				        		<td>T - 503</td>
				        	</tr>
				        	<tr>
				        		<td>SASTRA TIONGHOA</td>
				        		<td>T - 418</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN BISNIS</td>
				        		<td rowspan="5" style="vertical-align: middle;">12.00 - 14.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN KEUANGAN</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>INTERNATIONAL BUSINESS ENGINEERING</td>
				        		<td>Ruang Konferensi III</td>
				        	</tr>
				        	<tr>
				        		<td>AKUNTANSI BISNIS</td>
				        		<td>T - 502</td>
				        	</tr>
				        	<tr>
				        		<td>INTERNATIONAL BUSINESS ACCOUNTING</td>
				        		<td>T - 503</td>
				        	</tr>
				        </table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div id="contact">
		<div class="container">
		<h4>Contact Us</h4>
		<h5>Welcome Grateful Generation 2017</h5>
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
    <script src="js/animasi.js"></script>
    
  </body>
</html>