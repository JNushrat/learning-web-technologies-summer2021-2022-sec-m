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
		if($username == "xyz" && $email== "xyz@aiub.edu" && $phonenumber="0134******" )
		{
			$_SESSION['status'] = true;
			header('location: Seller.php');
		}
	   else
	   {

		$user = $username."||".$email."||".$phonenumber."\r\n";
		$file = fopen('Seller.php', 'a');
		fwrite($file, $user);
		header('location: Seller.php');
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