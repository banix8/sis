<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {


	public function getUsers(){
		$this->load->model('Useraccount', 'model');

		$data = $this->model->read();

		foreach($data as $key => $value){
			$buttons = "<a class='btn btn-primary btn-sm' title='Edit'><i class='glyphicon glyphicon-edit'></i></a>";

			$result['data'][$key] = array(
				$value->userid,
				$value->username,
				$value->password,
				$buttons
			);			
		}

		echo json_encode($result);

	}

}