<?php
session_start();
$userid = $_SESSION['username'];

 if($_FILES["file"]["type"]=='application/pdf')
 {

		move_uploaded_file($_FILES["file"]["tmp_name"],
      "curriculum/" . $_FILES["file"]["name"]);
      
	  
	  $name = $_FILES['file']['name'];
	  include 'connection.php';
	  $sql = "INSERT into curriculum VALUES('','$name')";
	  $res = mysql_query($sql);
     
	echo "<script>window.location.replace('curriculum.php');</script>";
	}
else
{
echo "File not supported";
}	
  
?> 