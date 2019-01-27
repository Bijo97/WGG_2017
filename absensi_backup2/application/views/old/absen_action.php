<?php
	if($nrp == "") exit;
	$model='rapat_'.$tipe.'_model';
	$h=$this->$model->count_panitia($nrp);
	if($h->a>0){
		$a=$this->$model->count_masuk($nrp,$idr);
		if($a->a==0){
			$n=$this->$model->get_panitia($nrp);
			$b=$this->$model->insert($nrp,$idr);
			echo "2<tr><td><b>$n->nrp &nbsp&nbsp</b></td><td><b>$n->nama_panitia</b></td></tr>";
		}
		else{
			echo "1Panitia sudah terdaftar masuk sebelumnya!";
			exit;
		}
	}
	else{
		echo "0NRP Panitia tidak terdaftar!";
		exit;
	}