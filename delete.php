<?php
$cid = $_GET['cid'];
include 'connection.php';

$sql = "DELETE FROM courses WHERE id='$cid'";
$res = mysql_query($sql);
header("location:editcourse.php");


?>