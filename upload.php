<?php
session_start();
$userid = $_SESSION['username'];

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "profile/" . $_FILES["file"]["name"]);
      
	  
	  $name = $_FILES['file']['name'];
	  include 'connection.php';
	  $sql = "UPDATE users SET image='$name' WHERE username='$userid'";
	  $res = mysql_query($sql);
     
		echo "<script>window.location.replace('editpro.php?image=image.php');</script>";
	 
    }
  
?> 