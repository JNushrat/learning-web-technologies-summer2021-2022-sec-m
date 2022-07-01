<?php 
	session_start();

	$email = $_POST['email'];
	$username = $_POST['username'];
	$phonenumber= $_POST['number'];
	$currentcity=$_POST['city'];
	$permanentadd=$_POST['permanentadd'];
	$religion=$_POST['religion'];
	$date=$_POST['date'];
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
			header('location: Profile.php');
		}
	   else
	   {

	   $user = $username."|".$email."|".$phonenumber. "|".$currentcity."|".$permanentadd."|".$religion."\r\n";
		$file = fopen('Profile.php', 'a');
		fwrite($file, $user);
		header('location: Profile.php');
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