
<div class="footer">
	<div class="container-fluid">
		<div class="row">

			<p class="text-center"> 
		Copyright &copy; <?php echo date("Y"); ?> Aslab Fasilkom <br>
		Fakultas Ilmu Komputer <br>
		Universitas Mercu Buana</p>
			</div>
		</div>
	</div>
</div>


<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
<script>
	 $('.btn-add').click(function(){

	 	var x=
    $( ".form-test" ).append( "<div class='form-group'> <label class='control-label col-md-4 col-xs-3' for='nim'>NIM</label> <div class='col-md-1 col-xs-3 col-sm-2'><input type='text' class='form-control' class='fnimadd' readonly></div><div class='col-md-3 col-xs-5 col-sm-6'><input type='text' class='form-control' name='nim' onkeypress='return no(event)'></div></div><div class='form-group'><label class='control-label col-md-offset-1 col-xs-3' for='nama'>Nama Lengkap</label><div class='col-md-4 col-xs-8'><input type='text' name='nama' class='form-control' style='margin-bottom: 15px'></div></div>" );
    // alert(123)
  });

</script>
</body>
</html>