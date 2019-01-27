<?php
	if($nrp == "") exit;
	$model='rapat_'.$tipe.'_model';
	$h=$this->$model->insert_new($nrp,$idr);