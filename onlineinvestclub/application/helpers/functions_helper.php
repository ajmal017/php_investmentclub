<?php
$CI =& get_instance();
function dump($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function send_email($data = array()) {
	global $CI;
	$CI->load->library('email');
	$to = $data['to'];
	$subject = $data['subject'];
	$html = $data['html'];
	if(isset($data['from']) && $data['from'] != '')
	{
		$from = $data['from']['email'];
		$name = $data['from']['name'];			
	}else{
		$from = "sales@barvaconmech.com";
		$name = "Barva ConMech";						
	}

	
$config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['mailtype'] = 'html';
	$config['useragent']           = "CodeIgniter";
    $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
    $config['protocol']            = "smtp";
    $config['smtp_host']           = "localhost";
    $config['smtp_port']           = "25";

    $CI->email->initialize($config);
	
    $CI->email->from($from, $name);
    $CI->email->to($to);

    $CI->email->subject($subject);
    $CI->email->message($html);

    $CI->email->send();
    /*echo "SUCCESS";
    print_r($CI->email->print_debugger());
    
    print_r($data);*/
}

function responseObject($response = array(),$status_code)
{
	http_response_code($status_code);
	header('Content-type: application/json');
	return json_encode($response);
}

function imagePath($path,$width = 70,$height=70)
{
	//return base_url('timthumb.php?src='.base_url('uploads/'.$path).'&w='.$width.'&h='.$height);
	return base_url('uploads/'.$path);
}

function getPackages($package_id=0)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getPackages($package_id);
	return $result;	
}

function checkUsernameExists($username)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->checkUsernameExists($username);
	return $result;	
}

function checkEmailIDExists($email)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->checkEmailIDExists($email);
	return $result;	
}

function checkAlignmentSetOfUser($userid)
{
	$this->db->trans_start();
    $this->db->where('userid',$userid);
	
	$query = $this->db->get('user_settings');
    $alignment = '';
    if($query->num_rows()==1){
        $row = $query->row()
        $alignment = $row['user_alignment'] 
    }    
	$this->db->trans_complete();
	return $alignment
}
//$CI->output->enable_profiler(TRUE);
?>