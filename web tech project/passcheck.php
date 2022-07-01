<?php 
	session_start();

    $current password= $_POST['password'];
	$new password = $_POST['password'];
	$confirm password = $_POST['password'];
	

	if($current password== null || $new password == null || $confirm password ==null )
	{
		echo "null password";
	}else{

		$user = $username."|".$new password."|".$email."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: login.html');
	}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>