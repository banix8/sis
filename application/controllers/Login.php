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
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if($this->form_validation->run()){

			$this->load->model('Useraccount', 'model');

			$credentials = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			$account = $this->model->check_account($credentials);
			
			if(count($account)){
					
				$this->setSession($account);
				redirect('dashboard');

			}else{
				$this->setFlashData(array("error_msg" => "Account doesn't Exist"));
			}
		}else{
			$this->setFlashData(array("error_msg" => "Please enter valid inputs"));
		}	
		// redirect to login if validation and database checking fails
		redirect('login');	
		
	}

	private function setSession($array){
		var_dump($array);
		exit;
		$data = array(
		    'username'  => $array[0]->username,
		    'accesslevel'     => $array[0]->accesslevel,
		    'logged_in' => TRUE
		);

		$this->session->set_userdata($data);
	}

	private function setFlashData($array){
		$this->session->set_flashdata($array);
	}
	
}
