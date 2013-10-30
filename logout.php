<?php
session_start();
session_destroy();
print "You have been logged out. <a href='index.php'>Go back</a>";
?>
