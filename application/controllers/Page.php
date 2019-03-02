<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	
	public function register()
	{
		$data['content'] = 'registration';
		$this->load->view('template/login', $data);
	}
}
