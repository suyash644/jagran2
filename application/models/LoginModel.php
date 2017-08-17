<?php
class Loginmodel extends CI_Model{

	public function login_valid($username,$password){
		$q=$this->db->where(['uname'=>$username,'pswd'=>$password])
				->get('users');
		if($q->num_rows()){
			return $q->row()->id;

			//return TRUE;
		}else{
			return FALSE;
		}

	}
}