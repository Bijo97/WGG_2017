<?php
$n = 29;

?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Absensi WGG 2016</title>
		<link rel='stylesheet' href="<?= base_url()?>/assets/css/bootstrap.min.css">
		<link rel='stylesheet' href="<?= base_url()?>/assets/css/bootstrap-responsive.min.css">
		<script src="<?= base_url()?>/assets/js/jquery-1.8.2.min.js"></script>
		<script src="<?= base_url()?>/assets/js/bootstrap-dropdown.js"></script>
	</head>
	<body background="<?= base_url()?>/assets/images/bg1.jpg">
	<?php
		date_default_timezone_set('Asia/Jakarta');
		// echo date("Y-m-d H:i:s");
	?>
	<div class="row-fluid">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Absensi WGG 2016</a>
					<ul class="nav">
						<li><a href="<?= site_url('mhs_view');?>">Search Mahasiswa</a></li>
						<li class="dropdown" id="setting">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Master Data<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?= site_url('m_kegiatan');?>">Kegiatan Mahasiswa</a></li>
								<li><a href="<?= site_url('m_mahasiswa');?>">Mahasiswa</a></li>
								<li><a href="<?= site_url('m_panitia');?>">Panitia</a></li>
								<li><a href="<?= site_url('m_rapat');?>">Rapat Panitia</a></li>
							</ul>
						</li>
						<!--li class="dropdown" id="setting">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Absensi Panitia<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Absen Masuk</a>
									<ul class="dropdown-menu">
										<?php 
										/*$q=$this->rapat_model->get_all_rapat();
										foreach($q->result() as $r){?>
											<li><a href="<?= site_url('rapat_masuk');?>/index/<?=$r->id_rapat?>"><?=$r->rapat?></a></li>
										<?php }?>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Absen Keluar</a>
									<ul class="dropdown-menu">
										<?php 
										$q=$this->rapat_model->get_all_rapat();
										foreach($q->result() as $r){?>
											<li><a href="<?= site_url('rapat_keluar');?>/index/<?=$r->id_rapat?>"><?=$r->rapat?></a></li>
										<?php }*/?>
									</ul>
								</li>
							</ul>
						</li-->
						<li class="dropdown" id="setting">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Absensi Mahasiswa<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php
									$i=0;
									$q=$this->kegiatan_model->get_all_kegiatan();
									foreach($q->result() as $r){ $i++; if($i>=$n){?>
										<li><a href="<?= site_url('mhs_absensi');?>/index/<?=$r->id?>"><?=$r->nama?></a></li>
								<?php }}?>
							</ul>
						</li>
						<li class="dropdown" id="setting">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Rekap Data Absensi<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Mahasiswa</a>
									<ul class="dropdown-menu">
									<?php
										$q=$this->kegiatan_model->get_all_kegiatan();
										foreach($q->result() as $r){?>
											<li><a href="<?= site_url('mhs_rekap');?>/index/<?=$r->id?>"><?=$r->nama?></a></li>
									<?php }?>
										<!--li><a href="<?= site_url('mhs_rekap_upacara');?>">Upacara</a></li-->
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Panitia</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a tabindex="-1" href="#">Absen Masuk</a>
											<ul class="dropdown-menu">
												<?php 
												$q=$this->rapat_model->get_all_rapat();
												foreach($q->result() as $r){?>
													<li><a href="<?= site_url('rekap_rapat_masuk');?>/index/<?=$r->id_rapat?>"><?=$r->rapat?></a></li>
												<?php }?>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a tabindex="-1" href="#">Absen Keluar</a>
											<ul class="dropdown-menu">
												<?php 
												$q=$this->rapat_model->get_all_rapat();
												foreach($q->result() as $r){?>
													<li><a href="<?= site_url('rekap_rapat_keluar');?>/index/<?=$r->id_rapat?>"><?=$r->rapat?></a></li>
												<?php }?>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>