<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Useraccount', 'user');
	}

	public function index(){
		$this->check_access();
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

		if(count($result) && $result[0]->accesslevel == 1){
			$this->setSession($result);			
			redirect('dashboard');
		}else if(count($result) && $result[0]->accesslevel == 3){
			$this->setSession($result);			
			redirect('students');
		}else{
			echo "Account doesn't exist <a href='".base_url()."'>Go to Login</a>";
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('app');
	}

	public function registration(){

		$data = $this->input->post();

		if($this->user->create($data)){
			echo "Successfully Created! <a href='".base_url()."'>Go to Login</a>";
		}else{
			echo "Failed to create! <a href='".base_url('app/register')."'>Register Again</a>";
		}

	}

	private function setSession($data){
		$sessionData = array(
		    'username'  => $data[0]->username,
		    'accesslevel' => $data[0]->accesslevel,
		    'logged_in' => TRUE
		);

		$this->session->set_userdata($sessionData);
	}

	private function check_access(){
		if($this->session->has_userdata('logged_in')){
			if($this->session->userdata('accesslevel') == 1){
				redirect('dashboard');
			}else if($this->session->userdata('accesslevel') == 3){
				redirect('students');
			}
		}else{
			return true;
		}
	}

}
