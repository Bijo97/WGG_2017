<script>
	$(document).ready(function(){
		$('#nrp').hide();$('#fix').show();$('#n1').focus();
		$('#check').click(function() {
			if( $('#fix:visible').length == 0){
				$('#nrp').hide();$('#fix').show();$('#n1').focus();
			}
			else{
				$('#fix').hide();$('#nrp').show();$('#nrp').focus();
			}
		});
		/*$('#n1').keyup(function(event){$('#n2').focus();});
		$('#n2').keyup(function(event){$('#n3').focus();});
		$('#n3').keyup(function(event){$('#n4').focus();});
		$('#n4').keyup(function(event){$('#n5').focus();});
		$('#n5').keyup(function(event){$('#n6').focus();});*/
		
		$('#nrp,#n6').keyup(function(event){
			var barcode = ($('#fix:visible').length == 0);
			var char_num = event.keyCode;
			if( (barcode && $('#nrp').val().length == 8) || (!barcode && $('#n6').val().length == 3) )
			{
				var data = $('#nrp').val();
				if(!barcode && $('#n6').val().length == 3){
					data = $('#n1').val()+$('#n2').val()+$('#n3').val()+$('#n4').val()+$('#n5').val()+$('#n6').val();
					}
				
				if(char_num == 13)
				{
					var url = "<?php echo site_url("rapat_$tipe/action").'/'.$id_rapat;?>/"+data;
					$.get(url, function(ajaxResult) {
						var result = ajaxResult.substr(0,1);
						var message = ajaxResult.substr(1);
						if(result == 2) // success
						{
							$('#history').html(message+$('#history').html());
							$('#n6').val("");
						}
						else if(result == 0) // nrp tidak terdaftar
						{
							var answer = confirm(message+"\nApakah NRP "+data+" mau didaftarkan?");
							if (answer)
							{
								var url = "<?php echo site_url("rapat_$tipe/tambah").'/'.$id_rapat;?>/"+data;
								$.get(url, function(ajaxAddResult) {
									alert("Panitia dengan NRP "+data+" berhasil ditambahkan!");
								});
							}
						}
						else
						{
							alert(message);
						}
						$('#nrp').val("");
						$('#identity').html("");
					});
				}
				else
				{
					var url = "<?php echo site_url("rapat_$tipe/nama");?>/"+data;
					$.get(url, function(data) {
						$('#identity').html(data);
					});
				}
			}
			else
			{
				$('#identity').html("");
			}
		});
	});
</script>
<script>
	function isnum(val){
		
	}
</script>
<div>
	<center>
	<h1 class="title"><?php echo $pagetitle?></h1><br>
	<div class="separator"></div>
	<?php $atrib=array('name'=>'check','id'=>'check','checked'=>false,);echo form_checkbox($atrib);?>Menggunakan Barcode<br><br>
	
	<table>
		<tr>
			<td><b>NRP :</b></td>
			<td><?php $atrib=array('name'=>'nrp','id'=>'nrp'); echo form_input($atrib);?></td>
			<td>
				<div id="fix">
				<?php 	$atrib=array('id'=>'n1','style'=>'width:20px;');echo form_input($atrib);
						$atrib=array('id'=>'n2','style'=>'width:20px;');echo form_input($atrib);
						$atrib=array('id'=>'n3','style'=>'width:20px;');echo form_input($atrib);?> - 
				<?php 	$atrib=array('id'=>'n4','style'=>'width:20px;');echo form_input($atrib);
						$atrib=array('id'=>'n5','style'=>'width:20px;');echo form_input($atrib);?> - 
				<?php	$atrib=array('id'=>'n6','style'=>'width:50px;');echo form_input($atrib); ?>
				</div>
			</td>
		</tr>
	</table>
	<table>
		<tbody id="identity">
		</tbody>
	</table>
	<div align="center" style="position:relative; margin-top: 10px; font-size:14px">
		<h4>Daftar mahasiswa yang telah terdaftar masuk :</h4><br /><br />
		<table>
			<tbody id="history">
				<?php echo $_ajax; ?>
			</tbody>
		</table>
	</div>
	</center>
</div>