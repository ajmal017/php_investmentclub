<?php

class Adminpackages_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function addPackage($package_name,$package_amount,$package_type,$package_desc){
		$this->db->trans_start();
        $array = array('package_amount' => $package_amount,'package_name'=>$package_name,'package_type'=>$package_type,'package_desc'=>$package_desc, 'package_created_date' => date("Y-m-d H:i:s"),'package_status'=>'active');
		$this->db->set($array);
		$this->db->insert('package_master');
		$last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete();
        return $last_inserted_id;
    }

    function editPackage($package_id,$package_name,$package_amount,$package_type,$package_desc){
        $this->db->trans_start();
        $array = array('package_amount' => $package_amount,'package_name'=>$package_name,'package_type'=>$package_type,'package_desc'=>$package_desc);
		$this->db->where('package_id', $package_id);
		$res = $this->db->update('package_master', $array);
		$this->db->trans_complete();
        return $res;
    }

    function addPackageMedia($package_id,$image_path,$type,$created_date){
        $this->db->trans_start();
		$array = array('package_image' => $image_path);
		$this->db->where('package_id', $package_id);
		$res = $this->db->update('package_master', $array); 
		$this->db->trans_complete();
        return true;
    }
}