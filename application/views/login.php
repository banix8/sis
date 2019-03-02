<div class="container">
	<form action="#">
		<div class="panel-primary">
			<div class="panel-heading text-center">
				<h4><?= $pagename; ?>  : SIS</h4>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<input type="text" placeholder="Username" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-primary">Login</button>
					<a href="<?= base_url('app/register'); ?>" class="btn btn-success">Register Here!</a>
				</div>
			</div>
		</div>
	</form>
</div