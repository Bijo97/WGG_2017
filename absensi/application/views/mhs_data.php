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
			echo "<td align='center' colspan=2><h4>".$h->nama."</h4></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td align='center' colspan=2><h5>(".$h->jurusan.")</h5></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td><h5>Ukuran Jaket</h5></td><td><h5> : ".$h->jaket."</h5></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td><h5>Ukuran Muts</h5></td><td><h5> : ".$h->muts."</h5></td>";
		echo "</tr>";
	}