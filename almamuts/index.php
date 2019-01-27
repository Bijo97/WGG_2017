<!DOCTYPE html>
<head>
<title>Form Almamater & Muts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<p><b><center>NRP :</center></b></p>
<input type="text" class="form-control" style="width: 250px;text-align: center;margin: 0 auto;" name="txt" onkeypress="handle(event,this.value);" id="nrp"/>

<script>
    function handle(e,z){
        if(e.keyCode === 13){
    	    $.ajax({url:"master.data.php?nrp=" + z,success:function(result){
		      $("#content").html(result);
		    }});
        }

        return false;
    }
</script>

<div id="content">
</div>

</body>
</html>