<?php 
	session_start();

	$description = $_POST['description'];

	if($description == null)
	{
		echo "null post";
	}
	else
	{
		if($post == "abcd")
		{
			$_SESSION['status'] = true;
			header('location: post.php');
		}
	   else
	   {

		$user = $description."\r\n";
		$file = fopen('post.php', 'a');
		fwrite($file, $user);
		header('location: post.php');
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