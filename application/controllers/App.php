<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Useraccount', 'user');
	}

	public function index(){
		$data['pagename'] = 'Login';
		$data['contents'] = 'login';		
		$this->load->view('templates/main', $data);
	}

	public function register(){
		$data['pagename'] = 'Register';
		$data['contents'] = 'registration';		
		$this->load->view('templates/main', $data);
	}


	public function login(){
		
		$data = $this->input->post();
		$result = $this->user->check_account($data);

		if(count($result)){
			redirect('dashboard');
		}else{
			echo "Account doesn't exist <a href='".base_url()."'>Go to Login</a>";
		}

	}

	public function registration(){

		$data = $this->input->post();

		if($this->user->create($data)){
			echo "Successfully Created! <a href='".base_url()."'>Go to Login</a>";
		}else{
			echo "Failed to create! <a href='".base_url('app/register')."'>Register Again</a>";
		}

	}

}
