<?php 
//making connection to database and table selection
require_once("include/connect.php");

//include the header
require("include/header.php");

$year = (int)$_GET['year'];

//making queries to database
$query = "SELECT name,id FROM profiles where batch='$year'";//storing the names from db into query

$profile=mysql_query($query,$connection);
	if(!$profile)
	{
	die("Database Query Failed ".mysql_error());
	}
echo "<div id=\"prof1\">";
while($row=mysql_fetch_array($profile))
{
echo "Name: <a href=\"user.php?id={$row['id']}\">{$row['name']}</a><br/>";
}
echo "</div>";

//including footer
require("include/footer.php");

?>
