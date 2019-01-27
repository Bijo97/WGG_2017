<?php if(isset($_POST['exp'])) $this->rekap_model->export($this->rekap_model->get_data($id_rapat));?>
<div class="span10 offset1">
	<div id="content" class="span11">
		<h1><?=$pagetitle?></h1><br>
		<form method="post">
		<button type="submit" name="exp" class="btn btn-primary pull-right">Export</button><br>
		</form>
		<table class="table table-bordered table-striped" style="background-color: #eaebff;">
			<thead>
				<th>NRP</th>
				<th>Nama Panitia</th>
				<th>Divisi</th>
			</thead>
			<tbody>
				<?php $a=$this->rekap_model->get_data($id_rapat);
					foreach($a as $h){?>
				<tr>
					<td><?=$h->nrp?></td>
					<td><?=$h->nama_panitia?></td>
					<td><?=$this->rekap_model->get_divisi($h->id_divisi)->nama_divisi?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>