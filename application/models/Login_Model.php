<?php

class Login_Model extends CI_Model

{


    function doLogin($data){

		$query  = $this->db->where('email',$data['email']);
		$query  = $this->db->where('password',$data['password']);
		$query = $this->db->get('tbl_admin_login');

	    return $query->result_array();

}

}
?>