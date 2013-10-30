<?php
session_start();

	include "include/connect.php";

	$password1=mysql_real_escape_string($_POST['password1']);
	$password2=mysql_real_escape_string($_POST['password2']);
if(($password1==$password2))
{
$cipher=sha1($password1);
$id=$_SESSION['id'];
$query=mysql_query("UPDATE profiles SET password='$cipher' WHERE id='$id'");
	if(!$query)
		{
		die("Database Query Failed ".mysql_error());
		}
echo"Successfully Changed Password<br/><a href=\"user.php?id={$id}\">Go Back</a>";
}
else
{
echo "Passwords do not match<br/><a href=\"user.php?id={$id}\">Go Back</a>";
}

	
?>
