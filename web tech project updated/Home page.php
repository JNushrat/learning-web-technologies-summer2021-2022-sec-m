<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html> 
<head> 
<title>Home Page</title>
</head> 
<body align ="center"> 
<h1>Welcome Home !</h1>
</br>
 
<br/> <a href="Profile.php"> Profile</a><a href="changeprofile.php"></a>
<br/>
<br/> <a href="GroupInfo.html"> Group info</a><a href="changeInfo.html"></a>
<br/>
<br/> <a href="ModeratorsList.php"> View Moderators</a>
<br/>
<br/> <a href="AdminList.php"> View Admins</a>
<br/>
<br/> <a href="Seller.php"> View Sellers</a>
<br/>
<br/> <a href="Buyer.php"> View Buyers</a>
<br/>
<br/> <a href="Memberadd.php"> Add Members</a>
<br/>
<br/> <a href="aprvPost.php"> Add Post</a>
<br/>
<br/>

<br/> <a href="logout.php">logout</a> 
</body> 
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>
