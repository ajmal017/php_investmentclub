<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_packages extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Package_model');
   		$this->menu_active = 'packages';
    }

	public function index()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/packages');
	}


	public function add_package()
	{
		if($this->input->post())
		{
			$status = '';
			$message = '';
			$this->load->library('form_validation');
			$package_name = $this->input->post('package_name');
			$package_amount = $this->input->post('package_amount');
			$package_desc = $this->input->post('package_desc');
			$filesCount=isset($_FILES['files']['name'])? count($_FILES['files']['name']):0;
			
			$this->form_validation->set_rules('package_name', 'Package Name', 'required');
			$this->form_validation->set_rules('package_amount', 'Package Name', 'required');
			$this->form_validation->set_rules('package_desc', 'Package Description', 'required');
			
			$this->form_validation->run();
	        $error_array = $this->form_validation->error_array();
	        $allowed =  array('gif','png' ,'jpg','jpeg');
	    	if ($filesCount == 0)
	        {
	            $error_array['files'] = 'Please choose files for upload';
	        } 
	        
	        if($filesCount > 0)
	        {
				$file_name = $_FILES['files']['name'];
				$error = false;
				if($file_name != '')
				{	
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					if(!in_array($ext,$allowed) ) {
					    $error = true;
					}
				}
				if($error == true)
				{
					$error_array['files'] = 'Please choose valid format images';
				}
	        }

	        if(count($error_array) == 0 )
	        {
	        	$last_inserted_id = $this->Package_model->addPackage($package_name,$package_amount,$package_desc);	

	        	$this->load->library('upload');
			    $config['upload_path'] = FCPATH . 'uploads/packages/';
			    $config['allowed_types'] = 'gif|jpg|png';
			    $files = $_FILES['files'];
	        
	        if($files != '')
	        {	
	        	$_FILES['uploadedimage']['name'] = time().'_'.rand(1111,9999).'_'.$files['name'];
		        $_FILES['uploadedimage']['type'] = $files['type'];
		        $_FILES['uploadedimage']['tmp_name'] = $files['tmp_name'];
		        $_FILES['uploadedimage']['error'] = $files['error'];
		        $_FILES['uploadedimage']['size'] = $files['size'];
		        //now we initialize the upload library
		        $this->upload->initialize($config);
		        $data = array();

		        if ($this->upload->do_upload('uploadedimage'))
		        {
		        	$data['uploads'] = $this->upload->data();
		        }
		        if(isset($data) && count($data) > 0)
		        {
		        	
		        	foreach ($data as $du)
		        	{
		        		$package_id = $last_inserted_id;
		        		$image_path = $du['file_name'];
		        		$type= 'product';
		        		$created_date = date("Y-m-d H:i:s");
		        		$this->Package_model->addPackageMedia($package_id,$image_path,$type,$created_date);
		        	}
		        }
		    }
			    
			    $status = 'success';
			    $message = 'Added successfully';
	        }else
	        {
	        	$status = 'error';
	        	$message = $error_array;
	        }
	        $response = array('status'=>$status,'message'=>$message);
			echo responseObject($response);
		}
	}
}
