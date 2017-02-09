<?php
include "header.php";

session_start();
include "authenticate.php";
include "config.php";            
include "connect.php";

$errors = array();
function print_errors ($errors) {
	for($i=0; $i<count($errors); $i++){
		print"$errors[$i];";
	}
}	

if(isset($_POST['submit'])){                 
  
    $user_name=trim($_POST['username']);
    $pass=trim($_POST['Password']);
		
	$query = "SELECT username, password FROM users WHERE username='$user_name'";
			
    $result = mysqli_query($db, $query); 

	if(!$result) {
        $errors[] =  "Error in SELECT statement." .   mysqli_error($db);
		die("Error: " . mysqli_error($db));
	}
    else {
	

			$row = mysqli_fetch_assoc($result);
	
		if ($row) { 
			if (password_verify ($pass, $row['password'])) {     // This function will automatically encrypt $pass and compare it with the encrypted password that is in $row['password']
				print "Password is valid and verified.<br>";
				$_SESSION['user_name'] = $user_name;             // I had to add this here; you sort of tried it below but it needed to moved up here. 
			                                                   // you had a bunch of stuff somewhere near here that I had to delete
			}else {
				$errors[]= "Your login credentials could not be verified";
			}
		}   
		else { 
			$errors[] =  "Your login credentials could not be verified";
		}
	}   

	if (count($errors) > 0) {
		print "<font color='red'>";
		print_errors($errors);
		print "Please try again."; 
		print "</font><br />";
	}	
}

if(isLoggedIn()) {
	$username = $_SESSION['user_name'];
    print "You are currently logged in as: $username<br>";
	print "Please access the";
?>	
<a href="home.php">homepage</a> 
<?php	
	print "and get started on your character.";
    print " or use this link to ";
?>
<a href="logout.php">logout.</a>  
<?php	
} 
else {
?>
<form action="" method="post">
<fieldset><legend>Login</legend>
<table border="1">
<tr><td>Username:</td><td><input type="text"name="username" required="required"></td></tr>
<tr><td>Enter Password:</td><td><input type="password" pattern="[a-zA-Z0-9@-_)!@#$%^&*(]+" name="Password" required="required"></td></tr>
</table>
</fieldset>
<input type="submit" name="submit" value="Submit">
</form>
    No Login? Click here to <a href='register.php'>Register.</a><br><br>
	Finished? Please <a href='logout.php'>Logout</a><br><br>

<?php 
}
include "footer.php";
?>

