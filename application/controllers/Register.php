<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$data['content'] = 'registration';
		$this->load->view('template/main', $data);
	}

	// This is the transaction for registering new user account
	public function registration(){
		$this->load->model('Useraccounts', 'model');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		if($this->model->create($data)){
			echo "Successfully Created";
		}else{
			echo "Failed to Create";
		}

	}


	
}
