<html>
<head>
	<title>Edit Profile Info</title>
</head>
<body align="center">
	<h1><strong>Edit Profile Info</strong></h1>
	<form method="post" action="profileUpCheck.php" enctype="">
			<fieldset>
				<legend>Change</legend>
				<table align="center">
<tr>
		<td>Upload Photo: </td>
		<td>
			<input type="file" name="" value="">
		</td>
	</tr>
	<tr>
	    <td>Change User Name:</td>
		<td><input type="text" name="username" value="" ></td>
	</tr>
	<tr>
	    <td>Change Email:</td>
		<td><input type="text" name="email" value="" ></td>
	</tr>
	<tr>
		<td>Add/Change Phone Number:</td>
		<td><input type="number" name="number" value="" ></td>
		</td>
	</tr>
	<tr>
		<td>Add Current City:</td>
		<td><input type="text" name="city" value="" ></td>
		</td>
	</tr>
	<tr>
		<td>Add Permanent Address:</td>
		<td><input type="text" name="permanentadd" value="" ></td>
		</td>
	</tr>
	<tr>
		<td>DOB</td>
		<td><input type="date" name="date" value="" ></td>
	</tr>
	<tr>
		<td>Add Religion:</td>
		<td><input type="" name="religion" value="" ></td>
		</td>
	</tr>
	<tr>
	    <td>Gender</td>
		<td><input type="radio" name="gender" value="" > Male
	        <input type="radio" name="gender" value="" > female
			<input type="radio" name="gender" value="" > other
		</td>
	</tr>
	<tr>
		<td>Add About Yourself</td>
		<td>
		<textarea></textarea>
		</td>
	</tr>
	<tr>
	    <td>Change Password: <a href="changePass.php">Click here</a></td>
	</tr>
	<tr>
    <tr>
    <td><input type="submit" name="" value="Change"></td>
	<a href="Profile.php"><input type="button" name="Cancel" value="Cancel"></a>
    <td><a href="login.html">Login</a></td>
    <td><a href="Home page.php">Home</a></td>
    </tr>
     <input type="reset" name="" value="Reset">
</td>	
											
</table>
</fieldset>
</form>
	
</body>
</html>