<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['content'] = 'login';
		$this->load->view('template/landing', $data);
	}

	public function registration(){
		$data['content'] = 'registration';
		$this->load->view('template/landing', $data);
	}
}
