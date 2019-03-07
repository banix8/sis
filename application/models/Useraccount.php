<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useraccount extends CI_Model {
	
	protected $table = 'useraccount';

	public function check_account($data = null){
		if($data != null){
			$sql = "SELECT * FROM ".$this->table." WHERE username ='".$data['username']."' AND password = '".$data['password']."'";

			return $this->db->query($sql)->result();
		}
	}

	public function create($data){
		$sql = "INSERT INTO ".$this->table."(username,password) VALUES ('".$data['username']."', '".$data['password']."')";

		// INSERT/DELETE/UPDATE QUERY returns boolean
		return $this->db->query($sql);		

	}

	public function read($data = null){
		$sql = "SELECT * FROM ".$this->table;

		// SELECT query returns recordset
		return $this->db->query($sql)->result();

	}

	public function update(){
		
	}

	public function disable(){

	}

	private function delete(){

	}

}
