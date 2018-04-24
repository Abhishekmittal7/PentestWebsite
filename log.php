<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];

include 'connection.php';

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$res = mysql_query($sql);
$count = mysql_num_rows($res);

		if($count == 0)
		{
		echo "Username Password Incorrect";
		}
		else
		{
			$_SESSION['username'] = $user;
			$_SESSION['role'] = $role;
			header("location:home.php?image=image.php");
		}

?>