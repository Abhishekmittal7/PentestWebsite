<?php
include 'connection.php';
$sql1 = "SELECT image from users WHERE username='$user'";
$res1 = mysql_query($sql1);
$image = mysql_result($res1,0);

echo'<table align="center"><tr><td><img src="./profile/'.$image.'" width="100" height="100"><br></td></tr></table>';
?>