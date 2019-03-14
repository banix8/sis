<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$data['content'] = 'registration';
		$this->load->view('template/login', $data);
	}

	// This is the transaction for registering new user account
	public function registration(){
		// Error Handling or Exception Handling
		try{
			$newdata = $this->input->post(); // $_POST 
			$result = $this->validate($newdata);

			$this->setFlashData(array('alertType' => 'danger'));
			if(count($result) == 0){
				$this->load->model('Useraccount', 'model');
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);

				if($this->model->create($data)){
					$this->setFlashData(array('alertType' => 'success'));
					$this->setFlashData(array("system_msg" => array('Successfully Registered!')));
				}else{
					$this->setFlashData(array("system_msg" => array('Failed to create')));
				}
			}else{
				$this->setFlashData(array("system_msg" => $result));
			}
			redirect('register');
		}catch(exception $ex){
			header('Location: https://stackoverflow.com/search?q='.$ex);
		}		
	}

	private function setFlashData($array){
		$this->session->set_flashdata($array);
	}

	private function validate($data){

		$sudlanan_sa_error = [];

		if($data['username'] == ''){
			array_push($sudlanan_sa_error, "Username is required");
		}

		if($data['password'] == ''){
			array_push($sudlanan_sa_error, "Password is required");
		}

		if(strlen($data['password']) < 6){
			array_push($sudlanan_sa_error, "Password should be atleast 6 characters");
		}

		if($data['password'] != $data['repassword']){
			array_push($sudlanan_sa_error, "Password doesn't match");
		}

		return $sudlanan_sa_error;

	}
	
}
