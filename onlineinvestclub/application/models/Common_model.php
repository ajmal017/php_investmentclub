<?php

class Common_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function getPackages($package_id,$filterArray = array())
    {
    	$this->db->trans_start();
    	$this->db->select('*');
		$this->db->from('package_master');

		//$filterArray = array('package_status'=>'active','package_name'=>'Gold');
		foreach($filterArray as $key=>$value)
		{
			$this->db->where($key,$value);
		}
		
		if($package_id > 0)
		{
			$this->db->where('package_id',$package_id);	
		}
		$query = $this->db->get();
		
		$category_data = array();
		$category_main_data = array();
		$main_data = array();
		$data = array();
		foreach($query->result() as $row)
		{
			$data = array(
							'package_id'=>$row->package_id,
							'package_name'=>$row->package_name,
							'package_amount'=>$row->package_amount,
							'package_type'=>$row->package_type,
							'package_image'=>$row->package_image,
							'package_desc'=>$row->package_desc,
							'package_status'=>$row->package_status,
							'package_created_date'=>$row->package_created_date,
							);

			$this->db->trans_start();
	    	$this->db->select('*');
			$this->db->from('package_media');
			$this->db->where('package_id',$row->package_id); 
			$query = $this->db->get();
			$data1 = array();
			foreach($query->result() as $row)
			{
				$data1[] = array(
								'image_path'=>$row->image_path,
								'file_type'=>$row->file_type,
								'package_media_id'=>$row->package_media_id
								);
			}
	    	$data['study_data'] = $data1;
	    	
	    	$this->db->trans_complete();

			if($package_id > 0)
			{
				$main_data = $data;	
			}else
			{
				array_push($main_data,$data);
			}
		}
    	$this->db->trans_complete();
		return $main_data;
    }

    function getUserPackages($userid,$filterArray = array())
    {
    	$this->db->trans_start();
    	$this->db->select('*,user_packages.status as user_package_status');
    	//$filterArray = array('package_status'=>'active','package_name'=>'Gold');
		foreach($filterArray as $key=>$value)
		{
			$this->db->where($key,$value);
		}
		
		if($userid > 0)
		{
			$this->db->where('user_packages.userid',$userid);	
		}

		$this->db->join('users', 'user_packages.userid = users.userid','left');
		$this->db->join('package_master', 'user_packages.package_id = package_master.package_id','left');
		$query = $this->db->get('user_packages');
		
		$category_data = array();
		$category_main_data = array();
		$main_data = array();
		$data = array();
		foreach($query->result() as $row)
		{
			$data = array(
							'user_package_id'=>$row->id,
							'package_id'=>$row->package_id,
							'userid'=>$row->userid,
							'username'=>$row->username,
							'fullname'=>$row->firstname.' '.$row->middlename.' '.$row->lastname,
							'profile_image'=>$row->profile_image,
							'package_name'=>$row->package_name,
							'package_amount'=>$row->package_amount,
							'quantity'=>$row->quantity,
							'package_type'=>$row->package_type,
							'package_image'=>$row->package_image,
							'package_desc'=>$row->package_desc,
							'package_status'=>$row->package_status,
							'package_created_date'=>$row->package_created_date,
							'purchase_date'=>$row->purchase_date,
							'user_package_status'=>$row->user_package_status
							);
			
			array_push($main_data,$data);
		}
    	$this->db->trans_complete();
		return $main_data;
    }

    function checkUsernameExists($username)
    {
    	$this->db->trans_start();
    	$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$count = $query->num_rows();
		$this->db->trans_complete();
		if($count > 0)
		{
			return true;
		}else
		{
			return false;
		}
    }

    function checkEmailIDExists($email)
    {
    	$this->db->trans_start();
    	$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$email);
		$query = $this->db->get();
		$count = $query->num_rows();
		$this->db->trans_complete();
		if($count > 0)
		{
			return true;
		}else
		{
			return false;
		}
    }

    function checkAlignmentSetOfUser($username)
	{
		$this->db->trans_start();
		$this->db->select('user_settings.user_alignment,users.userid');
		$this->db->where('users.username',$username);
		$this->db->join('users', 'users.userid = user_settings.userid','left');
		$query = $this->db->get('user_settings');
		
		$data = array();
		if($query->num_rows()==1){
		    foreach($query->result() as $row)
			{
				$data = array(
							'userid'=>$row->userid,
							'user_alignment'=>$row->user_alignment,
							);
			}
		}    
		$this->db->trans_complete();
		return $data;
	}

	function getUserInfo($userid=0,$username = '')
    {
    	$this->db->trans_start();
    	$this->db->select('*');
    	if($userid > 0)
    	{
    		$this->db->where('users.userid',$userid);
    	}
    	if($username != '')
    	{
    		$this->db->where('users.username',$username);
    	}
		$this->db->join('users', 'users.userid = userdetails.userid','left');
		$this->db->join('user_settings', 'user_settings.userid = users.userid','left');
		

		$query = $this->db->get('userdetails');
		
		$data = array();
		foreach($query->result() as $row)
		{
			$data = array(
							'userid'=>$row->userid,
							'username'=>$row->username,
							'sponsorid'=>$row->sponsorid,
							'placementid'=>$row->placementid,
							'placement'=>$row->placement,
							'leftmember'=>$row->leftmember,
							'rightmember'=>$row->rightmember,
							'firstname'=>$row->firstname,
							'middlename'=>$row->middlename,
							'lastname'=>$row->lastname,
							'email'=>$row->email,
							'profile_image'=>$row->profile_image,
							'address'=>$row->address,
							'city'=>$row->city,
							'state'=>$row->state,
							'country'=>$row->country,
							'pincode'=>$row->pincode,
							'dateofbirth'=>$row->dateofbirth,
							'mobile'=>$row->mobile,
							'gender'=>$row->gender,
							'pancard'=>$row->pancard,
							'pancard_image'=>$row->pancard_image,
							'aadhaar_card'=>$row->aadhaar_card,
							'aadhaar_card_image'=>$row->aadhaar_card_image,
							'bank_account_holder_name'=>$row->bank_account_holder_name,
							'bank_name'=>$row->bank_name,
							'branch'=>$row->branch,
							'account_number'=>$row->account_number,
							'ifsc_code'=>$row->ifsc_code,
							'user_alignment'=>$row->user_alignment,
							'role_id'=>$row->role_id,
							'status'=>$row->status,
							'created_date'=>$row->created_date
							);
		}
    	$this->db->trans_complete();
		return $data;
    }

    function getNotifications($notification_id = 0)
    {
    	$this->db->trans_start();
    	$this->db->select('*');
		$query = $this->db->get('notifications');
		
		$main_data = array();
		$data = array();
		foreach($query->result() as $row)
		{
			$data = array(
							'notification_id'=>$row->notification_id,
							'notification'=>$row->notification,
							'notification_status'=>$row->notification_status,
							'notification_created_time'=>$row->notification_created_time,
							);

		if($notification_id > 0)
		{
			$main_data = $data;
		}else
		{
			array_push($main_data,$data);
		}
		}
    	$this->db->trans_complete();
		return $main_data;
    }
}