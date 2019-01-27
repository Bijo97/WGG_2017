<?php
	if($nrp == "") exit;
	$h=$this->mhs_absensi_model->count_mhs($nrp);
	if($h->a>0){
		$n=$this->mhs_absensi_model->count_masuk($nrp,$id);
		if($n->a==0){
			$b=$this->mhs_absensi_model->insert($nrp,$id,$sekret,$hadir);
			$mhs=$this->mhs_absensi_model->get_mhs($nrp);
			echo "2<tr><td><b>$mhs->nrp &nbsp&nbsp</b></td><td><b>$mhs->nama</b></td></tr>";
		}
		else{
			echo "1Mahasiswa sudah terdaftar masuk sebelumnya!";
			exit;
		}
	}
	else{
		echo "0NRP Mahasiswa tidak terdaftar!";
		exit;
	}