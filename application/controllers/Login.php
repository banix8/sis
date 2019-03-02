<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data['content'] = 'login';
		$this->load->view('template/login', $data);
	}

	public function register()
	{
		$data['content'] = 'registration';
		$this->load->view('template/login', $data);
	}

	public function start(){
		$this->load->model('Useraccount', 'model');

		$credentials = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		if($this->model->read($credentials)){
			redirect('dashboard');
		}else{
			redirect('login');
		}
		
	}

	
}
