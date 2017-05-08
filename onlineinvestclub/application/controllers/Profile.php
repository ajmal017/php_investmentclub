<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('frontend/profile');
	}

	public function register()
	{
		if($this->input->post())
		{
			$status = '';
			$message = '';
			$this->load->library('form_validation');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->run();
			$error_array = $this->form_validation->error_array();
			
			$checkUsernameExists = checkUsernameExists($username);	
			if($checkUsernameExists == true)
			{
				$error_array['username'] = 'Username already exists';
			}
			$checkEmailIDExists = checkEmailIDExists($email);	
			if($checkEmailIDExists == true)
			{
				$error_array['email'] = 'Email ID already exists';
			}
			if(count($error_array) == 0 )
			{
				$this->load->model('Profile_model');
				$this->Profile_model->register($username,$email,$password);
				$status = 'success';
			    $message = 'user registered successfully';
			    $status_code = 200;
			}else
			{
				$status = 'error';
			    $message = $error_array;
			    $status_code = 501;
			}
			$response = array('status'=>$status,'message'=>$message);
			echo responseObject($response,$status_code);
			
		}
	}
}
