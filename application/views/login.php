<div class="container">
	<div class="panel-primary">
		<div class="panel-heading col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h4>Student Information System</h4>
		</div>
		<div class="panel-body col-md-12 well">
			<form action="" method="post" class="loginform" role="form">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="username" name="username" placeholder="School ID No." required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					<span role="button" class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group col-md-6">
					<button type="submit" class="btn btn-primary btn-block">Login
					<i class="fas fa-sign-in-alt"></i>
					</button>
				</div>
				<div class="form-group col-md-6">
					<a href="<?= base_url('page/register'); ?>" class="btn btn-success btn-block">Sign-up
						<i class="fas fa-user-plus"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>