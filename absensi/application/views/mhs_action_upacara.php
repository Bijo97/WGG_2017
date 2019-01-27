<?php
	if($nrp == "") exit;
	$h=$this->mhs_absensi_model->count_mhs($nrp);
	if($h->a>0){
		$n=$this->mhs_absensi_model->get_mhs($nrp);
		if($id==-1){
			if($n->juli_26==0)
				$this->mhs_absensi_model->upd_26($nrp);
			else
				echo "3Mahasiswa sudah terdaftar masuk sebelumnya!";
		}
		else if($id==-2){
			if($n->juli_27==0){
				if($n->juli_26==0)
					echo "1Mahasiswa tidak mengikuti latihan upacara tanggal 26 Juli 2013!";
				$this->mhs_absensi_model->upd_27($nrp);
			}
			else
				echo "3Mahasiswa sudah terdaftar masuk sebelumnya!";
		}
		else if($id==-3){
			if($n->agustus_17==0){
				if($n->juli_26==0)
					echo "1Mahasiswa tidak mengikuti latihan upacara tanggal 26 Juli 2013!";
				else if($n->juli_27==0)
					echo "1Mahasiswa tidak mengikuti latihan upacara tanggal 27 Juli 2013!";
				$this->mhs_absensi_model->upd_17($nrp);
			}
			else
				echo "3Mahasiswa sudah terdaftar masuk sebelumnya!";
		}
		else if($id==-4){
			if($n->oktober_28==0){
				if($n->agustus_17==0 || $n->juli_26==0 || $n->juli_27==0)
					echo "4Mahasiswa tidak lulus upacara tanggal 17 Agustus 2013!";
				$this->mhs_absensi_model->upd_28($nrp);
			}
			else
				echo "3Mahasiswa sudah terdaftar masuk sebelumnya!";
		}
		$mhs=$this->mhs_absensi_model->get_mhs($nrp);
		echo "2<tr><td><b>$mhs->nrp &nbsp&nbsp</b></td><td><b>$mhs->nama</b></td></tr>";
	}
	else{
		echo "0NRP Mahasiswa tidak terdaftar!";
		exit;
	}