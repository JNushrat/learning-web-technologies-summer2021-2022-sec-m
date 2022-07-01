<?php 
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$username = $_POST['username'];

	if($email == null|| $username == null || $password == null)
	{
		echo "null username/password/email";
	}
	else
	{
		if($username == "Nushrat" && $password == "123")
		{
			$_SESSION['status'] = true;
			header('location: Home page.php');
		}
	   else
	   {

		$user = $username."|".$password."|".$email."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: login.html');
	   }
	   echo "invalid user"; 
	}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>