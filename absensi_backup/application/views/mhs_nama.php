<?php
	if($nrp == "") exit;
	$h=$this->mhs_absensi_model->get_mhs($nrp);
	if(!$h)
	{
		echo "NRP Mahasiswa tidak terdaftar!";
		exit;
	}
	else
	{
		echo "<tr>";
			echo "<td><h5>".$h->nama."</h5></td><td><h5>(".$h->jurusan.")</h5></td>";
		echo "</tr>";
	}