<?php 
//making connection to database and table selection
require_once("include/connect.php");

//include the header
require("include/header.php");


	if(!isset($_SESSION['username']) || $_SESSION['username']=="")
	{
		echo "Please login to see this page.....";
	}
	else
	{
		
	}

if(isset($_SESSION['username']))
{
echo "session id = ";
echo $_SESSION['id'];
}
else
{
}

//including footer
require("include/footer.php");
?>

