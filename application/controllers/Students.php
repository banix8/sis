<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index(){
		$this->check_access();

		$data['pagename'] = 'Students';
		$data['contents'] = 'contents/students/home';		
		$this->load->view('templates/main', $data);
	}

	private function check_access(){
		if($this->session->has_userdata('logged_in')){
			if($this->session->userdata('accesslevel') == 3){
				return true;
			}else{
				redirect('app');
			}
	    }else{
	    	redirect('app');
	    }
    }
}