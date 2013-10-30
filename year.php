<?php 
//making connection to database and table selection
require_once("include/connect.php");

//include the header
require("include/header.php");
?>

<section>
<div id="prof1">
<h2>Select the Year/Semester of The Students</h2>
<a class="action" href=profiles.php?year=2014>Final Year</a><br/><a style="color:#FFFBF9;font-size:20px;">
<br/>Batch from year 2000 to 2014</a><br/><br/>
<a class="action" href=profiles.php?year=2015>Third Year</a><br/><a style="color:#FFFBF9;font-size:20px;">
<br/>Batch from year 2011 to 2015</a><br/><br/>
<a class="action" href=profiles.php?year=2016>Second Year</a><br/><a style="color:#FFFBF9;font-size:20px;">
<br/>Batch from year 2012 to 2016</a><br/><br/>
<a class="action" href=profiles.php?year=2017>First Year</a><br/><a style="color:#FFFBF9;font-size:20px;">
<br/>Batch from year 2013 to 2017</a><br/><br/>

</div>
</section>
<?php
//including footer
require("include/footer.php");

?>
