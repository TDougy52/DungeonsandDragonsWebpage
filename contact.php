<?php
session_start();
include "header.php";
 print
"Thank you for using this website. For any questions or comments please put in your information in the form below.

<br><br>Contact Information<br>";
$errors= array();

if (isset ($_POST['sendMail']))       
{                                    
	$to="livingston1265@gmail.com";  
	$subject=trim($_POST['subject']);
	$subject=$_POST['subject'];
	if (empty($_POST['subject'])){print "Please select an option";}
	$email= trim($_POST['E-Mail']);
	$email=$_POST['E-Mail'];
	if (empty($_POST['E-Mail'])){print "Please enter your email.";}
	$message=trim($_POST['Message']);
	$message=$_POST['Message'];
	if (empty($_POST['E-Mail'])){print "Please write your question or comment in the Question or Comments field.";}
	$headers="From: $email";

	
	if ($_SESSION['6_letters_code'] == $_POST['captcha']) {              
	
		$sent=mail($to,$subject,$email,$message);
		if($sent) print "Thank you, email has been sent!";
		else print "Sorry message could not be sent.";
		
		
	}
	else {
		print "Captcha Incorrect. Please try again";
	}
}
else { 
?>
        <form>
<fieldset>First Name:<input type='text' value="<?php if(isset($_POST['FirstName'])){echo $_POST['FirstName'];}; ?>" name='FirstName:' id='First' size='54' required='required'><br>
		Last Name:<input type='text' value="<?php if(isset($_POST['LastName'])) {echo $_POST['LastName'];}; ?>" name='LastName:' id='Last' size='54' required='required'><br>
E-Mail Address:<input type='text' value="<?php if(isset($_POST['E-Mail'])){echo $_POST['E-Mail'];}; ?>" name='E-Mail' id='E-Mail' size='52' required='required'><br>
		Subject:<select name='subject' value='subject'>
				<option value='Question'>Question</option>
				<option value='Comment'>Comment</option>
				</select><br>
		<form method="post" action="contact.php">
		
	    <label for='Questions or Comments'> Questions or Comments</label><br>
<textarea name='Message' value="<?php if(isset($_POST['Message'])){echo $_POST['Message'];}; ?>" id='Message' rows='4' cols='40' required='required'></textarea><br>

     	Captcha:<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" ><br>
        Enter Captcha Code:<input name="captcha" type="text" ><br>
		<input type='submit' name='anotherCaptcha' value='Try Another Captcha'>
		<input type='submit' name='sendMail' value='Send Mail'>
		</fieldset>
        </form>
<?php 
}
include "footer.php";
?>