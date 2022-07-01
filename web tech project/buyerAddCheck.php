<?php 
	session_start();

	$email = $_POST['email'];
	$username = $_POST['username'];
	$phonenumber= $_POST['number'];
	//$usertype = $_POST['type'];//

	if($email == null|| $username == null|| $phonenumber== null)
	{
		echo "null username/email/usertype/phonenumber";
	}
	else
	{
		if($username == "abc" && $email== "abc@aiub.edu" && $phonenumber="0184******" )
		{
			$_SESSION['status'] = true;
			header('location: Buyer.php');
		}
	   else
	   {

		$user = $username."||".$email."||".$phonenumber."\r\n";
		$file = fopen('Buyer.php', 'a');
		fwrite($file, $user);
		header('location: Buyer.php');
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