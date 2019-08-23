<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<?php
	session_start();
	include 'connection.php';
	if(Isset($_POST['login'])){
		$User_Name=$_POST['User_Name'];
		$password=$_POST['password'];
		$q='SELECT * FROM `register` where `user_name`="'.$User_Name.'" and `password`="'.$password.'" ';
		$r=mysqli_query($reg,$q);
		if(mysqli_num_rows($r)>0){
            echo 'logged in';
            $_SESSION['User_Name']=$User_Name;
            header("location:index.php");
		}
		else{
			echo'your credentials do not match';
		}

	}
	?>
<div id="main">
	<h2 align="center">Login</h2>
	<center>
	<form method="post">
		<label>UserName:</label>
		<input type="text" name="User_Name"><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="login" value="login">
		<a href="registration.php">Not Registered yet?</a>
      </center>

	</form>

</div>
</body>
</html>