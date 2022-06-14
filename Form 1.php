<?php
session_start();
include("Validation.php");
?>
<html>
<head>

<title><Name></title>
</head>

<body>
<form>
 <fieldset>
	<legend></legend>
     <table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=" "></td><?php echo $NameError;?>
					</tr>
					
					<tr>
					   <td> </td>
					   <td><input type="submit" name="" value="Submit"></td>
					</tr>
					
	 </table>
	 </fieldset>
</form>

</body>
</html>	
					
					