<?php

class Common_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function getPackages($package_id)
    {
    	$this->db->trans_start();
    	$this->db->select('*');
		$this->db->from('package_master');
		$this->db->where('package_status','active');
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
}