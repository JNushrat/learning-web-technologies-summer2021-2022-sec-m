<?php 
	session_start();

	$id = $_POST['Id'];
	$password = $_POST['Password'];
	$name = $_POST['Name'];
	$usertype = $_POST['User_Type'];
	$fname = $_POST['fname'];

	if($id == null || $password == null || $name  == null || $usertype == null){
		echo "null username/password/id";
	}else{

		$user = $id."|".$password."|".$name."\r\n";
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