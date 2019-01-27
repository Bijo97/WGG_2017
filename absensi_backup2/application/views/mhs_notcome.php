<?php if(isset($_POST['exp'])) $this->mhs_rekap_model->export($this->mhs_rekap_model->get_data($id));?>
<div class="span10 offset1">
	<div id="content" class="span11">
		<h1><?=$pagetitle?></h1><br>
		<form method="post">
		<button type="submit" name="exp" class="btn btn-primary pull-right">Export</button><br>
		</form>
		<table class="table table-bordered table-striped" style="background-color: #eaebff;">
			<tr>
				<td colspan=3><font color="#999">Showing <?=$this->mhs_rekap_model->count_data($id)->jml?> Records</font></td>
			</tr>
			<tr>
				<th>NRP</th>
				<th>Nama Panitia</th>
				<th>Divisi</th>
			</tr>
			<tbody>
				<?php $a=$this->mhs_rekap_model->get_data($id);
					foreach($a as $h){?>
				<tr>
					<td><?=$h->nrp?></td>
					<td><?=$h->nama?></td>
					<td><?=$h->jurusan?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>