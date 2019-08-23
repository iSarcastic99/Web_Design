<!DOCTYPE html>
<html>
<head>
	<title>User's Dashboard</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['User_Name'])){
	echo 'Welcome '.$_SESSION['User_Name'];
	echo '<a href="logout.php">Log Out</a>';
}
else{
	header("location:login1.php");
}
?>
<div id="main">
	<div id="message area">
	</div>
	<form method="post">
		<input type="text" name="message" style="width: 370px; height: 50px;" placeholder="Type to send your message">
		<input type="submit" name="submit" value="submit" style="width:70px;height: 50px;">
	</form>
</div>
</body>
</html>
