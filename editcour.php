<?php
session_start();
$cname = mysql_real_escape_string($_POST['cname']);
$cdes = mysql_real_escape_string($_POST['cdes']);
$cid = $_POST['id'];


include 'connection.php';

$sql="UPDATE courses SET cname='$cname',cdes='$cdes' WHERE id='$cid'";
$res = mysql_query($sql);
header("location:edit.php?cid=$cid");

?>