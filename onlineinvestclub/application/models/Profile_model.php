<?php

class Profile_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function register($username,$email,$password)
    {
		$this->db->trans_start();
		$password = md5($password);
		$array = array('username' => $username,'email'=>$email,'password'=>$password,'created_date' => date("Y-m-d H:i:s"),'email_verification_token'=>'123456');
		$this->db->set($array);
		$this->db->insert('users');
		$userid = $this->db->insert_id();
		$this->db->trans_complete();
        return $userid;
    }
}