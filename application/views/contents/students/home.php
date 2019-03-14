<div class="container-fluid">
	<h3>Welcome <?= $this->session->userdata('username'); ?></h3>
	<a href="<?= base_url('app/logout'); ?>">Logout</a>
	<hr>
	Home
</div>