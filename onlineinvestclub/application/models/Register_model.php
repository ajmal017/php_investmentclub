<?php

class Register_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function register($username,$email,$password)
    {
		$this->db->trans_start();
		$password = md5($password);
		$array = array('username' => $username,'email'=>$email,'password'=>$password,'created_date' => date("Y-m-d H:i:s"),'email_verification_token'=>'123456','entry'=>0);
		$this->db->set($array);
		$this->db->insert('users');
		$userid = $this->db->insert_id();

		$array = array('userid' => $userid);
		$this->db->set($array);
		$this->db->insert('userdetails');

		$array = array('userid' => $userid,'user_alignment'=>'left');
		$this->db->set($array);
		$this->db->insert('user_settings');
		
		$this->db->trans_complete();
        return $userid;
    }
}