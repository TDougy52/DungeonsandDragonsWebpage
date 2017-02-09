<?php
session_start();

if (isset($_SESSION['user_name'])) {
    unset($_SESSION['user_name']);                    // clear the session variable
	print "<p>You are currently logged out. Please use this link to <a href='login.php'>Login Again</a></p>";
}
else {
    print "You are currently logged out. Please use this link to <a href='login.php'>Login</a></p>";
}	
