<?php 
//making connection to database and table selection
require_once("include/connect.php");
require_once("include/functions.php");
//include the header
require("include/header.php");
?>
<div id="prof2">

<?php
echo "You are logged in with user id {$_SESSION['id']}<br/>";
?>
<form class="email" action="processpic.php" method="post" enctype="multipart/form-data">
<input name="file" id="file" type="file"/>
<input class="send" type="submit" name="Submit" value="Submit">
</form>
</div>


<?php
//including footer
require("include/footer.php");
?>

