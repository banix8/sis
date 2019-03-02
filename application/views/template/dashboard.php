<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/x-icon">
	<title>Dashboard : Student Information System</title>
	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/DataTables/datatables.min..css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/pace/pace.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style-custom.css'); ?>">

</head>
<body>

	<?php 

		$this->load->view($content);
		
	?>

	<script type="text/javascript" src="<?= base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/DataTables/datatables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/custom-script.js'); ?>"></script>
</body>
</html>