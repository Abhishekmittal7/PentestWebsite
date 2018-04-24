<?php
session_start();
$user=$_SESSION['username'];
$first=$_POST['first_name'];
$last=$_POST['last_name'];
$prof=$_POST['profile'];

include 'connection.php';

$sql="UPDATE users SET first_name='$first',last_name='$last',profile='$prof' WHERE username='$user'";
$res = mysql_query($sql);
header("location:editpro.php?image=image.php");

?>