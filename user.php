<?php 
//making connection to database and table selection
require_once("include/connect.php");

//include the header
require("include/header.php");

$prof_id = (int)$_GET['id'];
//typecasting id to int to prevent sql injection;


$query = "SELECT * FROM profiles WHERE id='$prof_id'";//storing the names from db into query

$profile=mysql_query($query,$connection);
	if(!$profile)
	{
die("Database Query Failed ".mysql_error());
	}

while($row=mysql_fetch_array($profile))
{
echo "<div id=\"profimg\">";
echo "<div style=\"float: left; width: 50%;\">";
echo "<h2>Name</h2> {$row['name']}<br/><br/>";
echo "<h2>Completed Degree in</h2> <br/>{$row['batch']}<br/><br/>";
echo "<h2>Marks Details</h2><br/><p>Marks in 10th :{$row['marks10']}</p><br/><p>Marks in 12th :{$row['marks12']}</p><br/><p>Marks in B.Tech :{$row['marksem']}</p><br/><br/>";
echo "</div>";
echo "<div style=\"float: left; width:50%;\">";
echo"<img src=\"upload/{$prof_id}.png\"/>";
echo "</div>";
echo "</div>";
echo "<div id=\"prof2\">";
echo "<h2>Profile</h2><br/> {$row['profile']}<br/>";
echo "</div>";
echo "<div id=\"prof1\">";
echo "<h2>Skills</h2><br/> {$row['skills']}<br/>";
echo "</div>";
echo "<div id=\"prof2\">";
echo "<h2>Languages</h2><br/> {$row['lang']}<br/>";
echo "</div>";
echo "<div id=\"prof1\">";
echo "<h2>APIs and Technologies</h2><br/> {$row['api']}<br/>";
echo "</div>";
echo "<div id=\"prof2\">";
echo "<h2>Tools and Softwares</h2><br/> {$row['tools']}<br/>";
echo "</div>";
echo "<div id=\"prof1\">";
echo "<h2>Achievements</h2><br/> {$row['interest']}<br/>";
echo "</div>";
}


//including footer
require("include/footer.php");
?>

