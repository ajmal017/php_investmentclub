<?php 
$CI = & get_instance();
//print_r($_SERVER['REQUEST_URI']);

function isLogin()
{
	global $CI;
	$controller_name = $CI->uri->segment(1);
	//echo $controller_name."==".$controller_name1;
	/*if($controller_name != 'admin')
	{
		$CI->output->cache(15);
	}*/
	$login_required_pages = array('dashboard','mynetwork','admin_home','admin_packages','profile','packages');
	if(in_array($controller_name, $login_required_pages)  && $CI->session->userdata('logged_in') == '')
	{
		redirect('home');
	}
}
?>