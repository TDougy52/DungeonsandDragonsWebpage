<?php
include "header.php";
?>
<?php
include "config.php";
include "connect.php";
//include "login.php";                   // Don't include login.php

function print_errors ($errors) {
	for($i=0; $i<count($errors); $i++){
		print"$errors[$i];";
	}
}	  

$errors = array();

if (isset ($_POST['submit']))
{

//username validation
$username = trim($_POST['username']);
if(empty($_POST['username'])){
	$errors[]= "Please enter a valid username.<br>";
}

//email validation
$Email=trim($_POST['Email']);
if(empty($_POST['Email'])){
	$errors[]= "Please enter a valid email.";
}
if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
	echo "$Email is a valid email address.<br>";
}
else
	$errors[]="Invalid email address.<br>";


$find = "@";
$pos= strpos($Email, $find);
$local= substr($Email,0,$pos);
print"The local name is $local.<br>";
$domain= substr($Email,$pos+1);
print"The domain name is $domain.<br>";
print"<br><br>";
	

  //password validation
$Password=trim($_POST['Password']);
if(empty($_POST['Password'])){
	$errors[]= "Please enter a valid password.<br>";
}
$PasswordVerify=trim($_POST['PasswordVerify']);
if(empty($_POST['PasswordVerify'])){
	$errors[]= "Please enter the same password.<br>";
}
if (!preg_match ("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $Password)){ 
	$errors[] = "Password must contain at least 8 characters
and include 1 lower case, 1 upper case, 1 number, and 1
special character eg.  !@#$%^&*()";
}else{
	if($Password==$PasswordVerify){
		print "Password is valid and verified.<br>";
	}else{
		$errors[]= "Password does not match!<br>";
	}
}
print"<br><br>";

	if (count($errors) > 0){
		print_errors($errors);
	}else {  // If there are no errors with inputs, check to see if the username is available. 
		$query = "SELECT username, password FROM users WHERE username='$username'";
		$result = mysqli_query($db, $query);
		if(!$result){
			die( "Bad query" . mysqli_error($db));
		}
	
		$numRows = mysqli_num_rows($result);
		if($numRows > 0)
		{
			$errors[] = "username already exists.";
		}
		else { // User name is available and we can enter this new user into the database. 
		   $hashed_password = password_hash($Password,PASSWORD_DEFAULT);
           $query= "INSERT INTO users(username, password, email) VALUES('$username','$hashed_password','$Email')";
           $result = mysqli_query($db, $query);
		   if (!$result)
			    die ("SELECT error:" . mysqli_error($db));
		
		   echo "<p>Thank you for registering. Please <a href=\"login.php?username=$username\">login.</a></p>";
		  
        }		   
	}
		
		if (count($errors) > 0) {
            print_errors($errors); 
			
			echo "<p><a href=\"register.php\">Click Here to Try Again</a></p>";
		}	
	}
	
else {     
?>
<form method="post" action="">
<br><br><br>
<fieldset><legend>Registration Form</legend>
<table border="1">
<tr><td>Username:</td><td><input type="text"name="username" required="required"></td></tr>
<tr><td>Email:</td><td><input type="email" pattern="[a-zA-Z0-9@-_'.]+" name="Email" size="60" required="required"></td></tr>
<tr><td>Enter Password:</td><td><input type="password" pattern="[a-zA-Z0-9@-_)!@#$%^&*(]+" name="Password" required="required"></td></tr>
<tr><td>Verify Password:</td><td><input type="password" pattern="[a-zA-Z0-9@-_)!@#$%^&*(]+" name="PasswordVerify" required="required"></td></tr>
</table>
</fieldset>
<input type="submit" name="submit" value="Submit">
</form>
<br><br><br>

<?php } 
include "footer.php";
?>