<!DOCTYPE html>
<html>
<head>
	<title>Register yourself</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<?php
	include 'connection.php';
	if (isset($_POST['Register'])){

		$full_name=$_POST['full_name'];
		$email=$_POST['email'];
		$User_Name=$_POST['User_Name'];
		$password=$_POST['password'];
		if($full_name !="" and $email!="" and $User_Name!="" and $password!=""){

		 $q="INSERT INTO `register` (full_name,email,user_name,password)
                VALUES ('".$full_name."','".$email."','".$User_Name."','".$password."')";
			
			if(mysqli_query($reg,$q)){
				
				echo "SUCCESSFULL!!!";
				header("location:login1.php");
			}
			else{
				
				echo "Signup failed";
			}
		}
		else{
			echo "all the details are mendatory";
		}
	}
	function check($data)
{

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
	?>
<div id="main">
	<h2 align="center">Register Yourself</h2>
	<center>
		<form method="post">
		<label>Full Name:</label>
		<input type="text" name="full_name"><br><br>
		<label>E-mail:</label>
		<input type="E-mail" name="email"><br><br>
		<label>UserName:</label>
		<input type="text" name="User_Name"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="Register" value="Register">
	</form>
</center>
</div>
</body>
</html>