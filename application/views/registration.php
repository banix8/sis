<div class="container">
	<form action="<?= base_url('app/registration'); ?>" method="POST">
		<div class="panel-primary">
			<div class="panel-heading text-center">
				<h4><?= $pagename; ?> : SIS</h4>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<input type="text" placeholder="Username" class="form-control" name="username" required>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control" name="password" required>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Re-type Password" class="form-control" name="repassword" required>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Register</button>
					<a href="<?= base_url(); ?>" class="btn btn-danger">Go Back!</a>
				</div>
			</div>
		</div>
	</form>
</div