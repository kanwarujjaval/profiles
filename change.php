<?php 
//include the header
require("include/header.php");
?>
<?php
if(!isset($_SESSION['username']))
{
echo "<center><a href=\"login.php\">Login First!</a></center>";
}
else{}
?>
<div id="prof1">
<form class="email" name="login" method="post" action="changedata.php">
            <p align="center"><font color="white"><span style="font-size:12pt;"><b>Change Password</b></span></font></p>
 <span style="font-size:10pt;">New Password:</span>
<input type="password" name="password1"><br/>
<span style="font-size:10pt;">Retype Password:</span>
<input type="password" name="password2"><br/>
<input class="send" type="submit" name="submit" value="Submit">
</form>
</div>
<footer>
Copyright (c) 2013 | Kanwar Ujjaval Singh
</footer>
</body>
</html>
