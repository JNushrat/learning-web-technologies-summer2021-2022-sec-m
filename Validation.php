<?php 
	

	//print_r($_GET); 
	$Name="";
	$NameError="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$Name = $_POST['name'];
}	
	
	
	//echo $Name;

	if($Name != null){
		$_SESSION["Name"]=$Name;
	}else{
		$NameError="Validation Error";
		}
	

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>