<?php
	require('include/connect.php');
	session_start();
if(isset($_SESSION['username'])){

	$id=$_SESSION['id'];

	$name=mysql_real_escape_string($_POST['name']);
	$batch=mysql_real_escape_string($_POST['batch']);
	$stream=mysql_real_escape_string($_POST['stream']);
	$profile=mysql_real_escape_string($_POST['profile']);
	$skills=mysql_real_escape_string($_POST['skills']);
	$lang=mysql_real_escape_string($_POST['lang']);
	$api=mysql_real_escape_string($_POST['api']);
	$tools=mysql_real_escape_string($_POST['tools']);
	$interest=mysql_real_escape_string($_POST['interest']);
	$marks10=mysql_real_escape_string($_POST['marks10']);
	$marks12=mysql_real_escape_string($_POST['marks12']);
	$marksem=mysql_real_escape_string($_POST['marksem']);

$query=mysql_query("UPDATE profiles SET 
name='$name',
batch='$batch',
stream='$stream',
profile=IF('$profile' = '', profile, '$profile'),
batch=IF('$batch' = '', batch, '$batch'),
skills=IF('$skills' = '', skills, '$skills'),
lang=IF('$lang' = '', lang, '$lang'),
api=IF('$api' = '', api, '$api'),
tools=IF('$tools' = '', tools, '$tools'),
interest=IF('$interest' = '',interest, '$interest'),
marks10=IF('$marks10' = '', marks10, '$marks10'),
marks12=IF('$marks12' = '', marks12, '$marks12'), 
marksem=IF('$marksem' = '', marksem, '$marksem') 	 
WHERE id='$id'");
	if(!$query)
		{
		die("Database Query Failed ".mysql_error());
		}
	echo "Updated Successfully<br/><a href=\"user.php?id={$id}\">Go back to your Profile</a>";

}
else
{
echo "<a href=\"login.php\">login to continue</a>";
}
