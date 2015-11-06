<?php $this->load->view('public/templates/header'); ?> 
<div class="container">
	<div class="row">
		<div class="span9">
			<div class="register">
				<form action="<?php echo site_url('public/recommended/parameter')?>" method="POST" id="param" class="form-horizontal">
                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 16px"><?php echo $param_id?>. <?php echo $parameter->parameter_name?></b></legend>
					<div class="control-group" style="margin-left:-20px">
						<label class="control-label" for="inputConPass"><img  src="<?php echo base_url()?>assets/img/keinginanitu.jpg" alt="user-avatar" style="width:120px; height:140px;"></label><br />
                                                <div class="controls">
                                                    <b style="font-size: 16px"><?php echo $parameter->parameter_question ?></b><br />
                                                    <?php foreach ($kriteria as $k) { ?>
                                                        <label class="radio inline">
                                                            <input type="radio" value="<?php echo $k->id_kriteria ?>" name="kriteria"> <b style="font-size: 16px"><?php echo $k->kriteria_name ?></b>
                                                        </label><br />
                                                    <?php } ?>
                                                </div>
					</div><!--end control-group-->
					<div class="control-group" style="margin-left:-20px">
						<div class="controls">
							<input type="hidden" name="param_id" value="<?php echo $param_id+1?>" />
							<input type="hidden" name="tgl_rek" value="<?php echo $tgl_rek?>" />
							<input type="hidden" name="skip" value="0" id="skip" />
							<input type="hidden" name="show_result" value="0" id="show_result" />
							<button type="button" onclick="next()" class="btn btn-large btn-primary"><strong>Pilih Jawaban</strong></button>
							<!-- <button type="button" onclick="skip()" class="btn btn-large btn-danger"><strong>Lewati Pertanyaan</strong></button> -->
							<button type="button" onclick="result()" class="btn btn-large btn-success"><strong>Tampilkan Rekomendasi</strong></button>
						</div>
					</div><!--end control-group-->
				</form><!--end form-->
			</div><!--end register-->
		</div><!--end span9-->
	</div>
</div><!--end container-->
<script type="text/javascript">
	function next(){
		document.getElementById('show_result').value = 0;
		var error = true;
		var check = document.getElementsByName('kriteria');
		var check_length = check.length;
		for (var i = 0; i < check_length; i++) {
		    if (check[i].checked == true) {
		        error=false;
		    }
		}
		if(error==true){
			alert('input tidak boleh kososng');
		}else{
			document.getElementById("param").submit();
		}
	}
	function result(){
		document.getElementById('show_result').value = 1;
		var error = true;
		var check = document.getElementsByName('kriteria');
		var check_length = check.length;
		for (var i = 0; i < check_length; i++) {
		    if (check[i].checked == true) {
		        error=false;
		    }
		}
		if(error==true){
			alert('input tidak boleh kososng');
		}else{
			document.getElementById("param").submit();
		}
	}
</script>
<?php $this->load->view('public/templates/footer'); ?>
