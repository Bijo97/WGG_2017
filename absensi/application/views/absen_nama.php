<?php
	if($nrp == "") exit;
	$model='rapat_'.$tipe.'_model';
	$h=$this->$model->get_panitia($nrp);
	if(!$h)
	{
		echo "NRP Mahasiswa tidak terdaftar!";
		exit;
	}
	else
	{
		$i=$this->$model->get_divisi($h->id_divisi);
		echo "<tr>";
			echo "<td><h5>Nama : </h5></td><td><h5>".$h->nama_panitia."</h5></td><td><h5>(".$i->nama_divisi.")</h5></td>";
		echo "</tr>";
	}