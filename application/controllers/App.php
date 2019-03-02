<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

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
}
