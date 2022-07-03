<?php 
	session_start();

	//print_r($_GET);  
	$email = $_POST['email'];
	$password = $_POST['password'];
	//echo $username;

	if($email == null || $password == null)
	{
		echo "null email/password";
	}
	
	else
	{
		if($email == "nushrat" && $password == "1234")
		{
			$_SESSION['status'] = true;
			header('location: Home page.php');
		}
	   else
	   {
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) 
		{
			$data=fgets($file);
			$user = explode('|', $data);
			if($email == trim($user[2]) && $password == trim($user[1]))
			{
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: Home page.php');
			}
		}
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