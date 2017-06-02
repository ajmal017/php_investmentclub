<?php

class Login_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function check_login($username,$password,$encrypt=false){
        if($encrypt == false)
        {
            $password = md5($password);
        }
        
		$this->db->trans_start();
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        //$this->db->where('email_verified','yes');
		
		$query = $this->db->get('users');
        if($query->num_rows()==1){
            foreach ($query->result() as $row){
                if($row->email_verified != 'yes')
                {
                    return 'email_verified';
                }
                $data = array('logged_in'=>array(
							'userid'=>$row->userid,
                            'email'=> $row->email,
							'password'=> $row->password,
							'username'=> $row->username,
                            'fullname'=> ucfirst($row->firstname).' '.ucfirst($row->middlename).' '.ucfirst($row->lastname),
							'role_id'=>$row->role_id,
                            'status'=>$row->status,
                        ));
            }
			$this->db->query("UPDATE users SET last_login='".date("Y-m-d H:i:s")."' WHERE userid='".$row->userid."' ");
			$this->db->trans_complete();
            $this->session->set_userdata($data);
            return 1;
        }
        else{
            return 0;
      }
       
    }	
}