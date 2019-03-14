<div class="container">
	<div class="panel-primary">
		<div class="panel-heading col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h4>Student Information System</h4>
		</div>
		<div class="panel-body col-md-12 well">
			<?php 
				if($this->session->flashdata('system_msg') != null){
			?>
					<div class="alert alert-<?= $this->session->flashdata('alertType'); ?> alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <?php 
					  	$msg = $this->session->flashdata('system_msg'); 
					  	foreach($msg as $k){
					  		echo $k."<br>";
					  	}
					  ?>
					</div>
			<?php
				}
			?>
			<form action="<?= base_url('register/registration'); ?>" method="post" class="registrationform" role="form">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="username" name="username" placeholder="School ID No.">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-type Password">
					<span role="button" class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group col-md-6">
					<button type="submit" class="btn btn-primary btn-block">Register
					<i class="fas fa-sign-in-alt"></i>
					</button>
				</div>
				<div class="form-group col-md-6">
					<a href="<?= base_url(); ?>" class="btn btn-danger btn-block">Cancel
						<i class="fas fa-undo"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>