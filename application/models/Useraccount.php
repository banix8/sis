<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useraccount extends CI_Model {
	
	protected $table = 'useraccount';

	public function create($data){
		return $this->db->insert($this->table, $data);
	}

	public function read(){

	}

	public function update(){

	}

	public function disable(){

	}

	private function delete(){

	}

}
