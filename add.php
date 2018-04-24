<?php
session_start();
$cname = $_POST['cname'];
$cdes = $_POST['cdes'];


include 'connection.php';

$sql="INSERT INTO courses VALUES('','$cname','$cdes')";
$res = mysql_query($sql);
if($res)
{
?>

<script>alert('course Added');</script>
<?php

header("location:addcourse.php?message=course added");
}
?>