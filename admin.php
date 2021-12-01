<?php
require('connect.php');

if(isset($_POST['submit_it'])){
	$username = $_POST["myusername"];
	$password = $_POST["mypassword"];
    
	$sql = "SELECT email,password FROM `admin`";
	$result = $db->query($sql);
	$array = $result->fetch_array();
	

	if($username==$array['email']&&$password==$array['password'])
	{
		session_start();
		$_SESSION['adminloginid']=$_POST['myusername'];
		header("location:adminpanel.php");
	}
	else
	{
		header("location:incorrectadmin.php");
	}
	
};
$db->close();

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Admin Login</title>
</head>
<body bgcolor="lightgrey">
	<h2 align="center">Admin Login</h2>
	<form action="admin.php" method="POST">
		<div class="" align="center">
		<label>Username</label>
		<input type="text" name="myusername" value="" placeholder="Enter a username" autocomplete="off" required />
	</div>
	<br>
	<div class="" align="center">
		<label>Password</label>
		<input type="password" name="mypassword" value="" placeholder="Enter a password" autocomplete="off" required />
	</div>
	<br>
	<div class="" align="center">
		</br>
		<input class="" type="submit" name="submit_it" value="Login" />
	</div>
	</form>

</body>
</html>
