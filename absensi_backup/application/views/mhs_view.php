
<script>
	$(document).ready(function(){
		$('#nrp').keyup(function(event){
			var barcode = ($('#fix:visible').length == 0);
			var char_num = event.keyCode;
			if((barcode && $('#nrp').val().length==8))
			{
				var data = $('#nrp').val();
				var url = "<?php echo site_url("mhs_view/data");?>/"+data;
				$.get(url, function(data) {
					$('#identity').html(data);
				});
			}
			else
			{
				$('#identity').html("");
			}
		});
	});
</script>
<div>
	<center>
	<h1 class="title"><?php echo $pagetitle?></h1><br>
	<table>
		<tr>
			<td><b>NRP :</b></td>
			<td><?php $atrib=array('name'=>'nrp','id'=>'nrp'); echo form_input($atrib);?></td>
		</tr>
	</table>
	<table>
		<tbody id="identity">
		</tbody>
	</table>
	<div align="center" style="position:relative; margin-top: 10px; font-size:14px">
		<table>
			<tbody id="history">
				<?php echo $_ajax; ?>
			</tbody>
		</table>
	</div>
	</center>
</div>