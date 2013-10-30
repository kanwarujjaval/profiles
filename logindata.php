<?php

	include "include/connect.php";
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$cipher=sha1($password);
	$sql="SELECT * FROM profiles WHERE username='$username' and password='$cipher'";
	if(!$sql)
		{
		die("Database Query Failed ".mysql_error());
		}
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	$store=mysql_fetch_array($result);
	if($count==1)
	{
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['password']=$cipher;
		$_SESSION['id']=$store['id'];
		header("location:user.php?id={$_SESSION['id']}");
	}
	else
	{
		echo "Login Attempt Failed<br/><a href=\"login.php\">Go Back</a>";
	}
	
?>
