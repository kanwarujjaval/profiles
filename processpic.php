<?php
	require('include/connect.php');
	session_start();
if(isset($_SESSION['username'])){

	$id=$_SESSION['id'];


	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	header ("Content-Type: text/plain");
	if ((($_FILES["file"]["type"] == "image/gif")
	  || ($_FILES["file"]["type"] == "image/jpeg")
	  || ($_FILES["file"]["type"] == "image/png")
	  || ($_FILES["file"]["type"] == "image/x-png")
	  || ($_FILES["file"]["type"] == "image/pjpeg"))
	  && ($_FILES["file"]["size"] < 100000000)
	  && in_array ($extension, $allowedExts)) 	
		  {
	  if ($_FILES["file"]["error"] > 0)
	    {
	    echo "You've Encoutered an Error... Return Error Code: " . $_FILES["file"]["error"] . "<br>";
	    }
	  else
	    {
		$filename  = basename($_FILES['file']['name']);
		//$extension = pathinfo($filename, PATHINFO_EXTENSION);
		$new = ($id).".png";
	    if (file_exists("upload/{$new}"))
	      {
	      unlink("upload/{$new}");
	      echo "An Old Image already Existed,which has been Updated with new";
	      }
	      move_uploaded_file($_FILES['file']['tmp_name'], "upload/{$new}");
	      echo "\nIt has Been Updated Successfully";
	    }
	  }
	else
		  {
		  echo "Invalid file";
		  }

}
else
{
echo "<a href=\"login.php\">login to continue</a>";
}
?>