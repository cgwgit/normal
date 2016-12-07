<?php
/**
 *	This is sample login form checker, it works only with one user&pass
 *	
 *	Laborator.co
 *	www.laborator.co 
 */


	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	
	$resp = array('accessGranted' => false, 'errors' => ''); // For ajax response
	
	if(isset($_POST['do_login']))
	{
		$given_username = $_POST['username'];
		$given_password = $_POST['password'];
		
		if($user == strtolower($given_username) && $pass == $given_password)
		{
			$resp['accessGranted'] = true;
			setcookie('failed-attempts', 0);
		}
		else
		{
			// Failed Attempts
			$fa = isset($_COOKIE['failed-attempts']) ? $_COOKIE['failed-attempts'] : 0;
			$fa++;
			
			setcookie('failed-attempts', $fa);
			
			// Error message
			$resp['errors'] = '<strong>登录失败</strong><br />请输入正确的用户名和密码<br />失败次数: ' . $fa;
		}
	}
	
	echo json_encode($resp);