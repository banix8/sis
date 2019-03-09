<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useraccount extends CI_Model {

    protected $table = "useraccount";

    public function check_account($data){
    	$sql = "SELECT * FROM ".$this->table." WHERE username = '".$data['username']."' AND password = '".$data['password']."'";

    	return $this->db->query($sql)->result();
    }

	public function create($data){

		$sql = "INSERT INTO ".$this->table." (username, password) VALUES ('".$data['username']."','".$data['password']."')";

		return $this->db->query($sql);

	}

	public function read(){
		
		$sql = "SELECT * FROM ".$this->table;

		return $this->db->query($sql)->result();

	}

	public function update($data){
		
	}

	public function disable($data){
		
	}

}
