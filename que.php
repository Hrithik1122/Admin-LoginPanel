<?php 
require('connect.php');
if(isset($_POST['registerBtn'])){

	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["confirm_password"];

		if ($_POST["passwd"] === $_POST["confirm_password"]) {
			$sql = "INSERT INTO users_reg (username, email, password) VALUES ('$username', '$email', '$password')";
			$sql2 = mysqli_query($db,$sql);
}
else {
	echo "Password does not match";
}

}

$db->close();

?>