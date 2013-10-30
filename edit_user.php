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
<form class="email" action="update.php" method="post">
Your Name<br/>
<input type="text" name="name" placeholder="Your Name" required/><br/>
Select your Batch<br/>
<select name="batch">
<optgroup label="batch">
<option value="2014">2010-2014</option>
<option value="2015">2011-2015</option>
<option value="2016">2012-2016</option>
<option value="2017">2013-2017</option>
</optgroup>
</select><br/>
<br/>Select your Stream : <br/>
<input type="radio" name="stream" value="it" required/> IT
<input type="radio" name="stream" value="cse" required/> CSE<br>
Your Profile<br/>
<textarea name="profile" id="profile" placeholder="Your Profile"/></textarea><br/>
Your Skills<br/>
<textarea name="skills" id="skills" placeholder="Your Skills"/></textarea><br/>
Languages You Know <br/>
<textarea name="lang" id="lang" placeholder="Languages you know"/></textarea><br/>
Technologies and API's you can Work with<br/>
<textarea name="api" id="api" placeholder="Technologies and APIs"/></textarea><br/>
Tools and Software You can Operate<br/>
<textarea name="tools" id="tools" placeholder="Tools"/></textarea><br/>
Your Achievements or Interests<br/>
<textarea name="interest" id="interest" placeholder="Achievements"/></textarea><br/>
Marks in Class 10<br/>
<input type="text" name="marks10" placeholder="Marks in class 10"/><br/>
Marks in Class 12<br/>
<input type="text" name="marks12" placeholder="Marks in class 12"/><br/>
Marks in B.Tech upto the current Semester<br/>
<input type="text" name="marksem" placeholder="Marks in B.Tech upto the current Semester"/><br/>
<input class="send" type="submit" value="Submit">
</form>
</div>
<?php
//including footer
require("include/footer.php");
?>

