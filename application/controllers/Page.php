<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index(){
		echo "override";
	}
	public function register()
	{
		$data['content'] = 'registration';
		$this->load->view('template/main', $data);
	}

	public function add(){
		return 1+1;
	}
}
