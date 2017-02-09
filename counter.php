<!DOCTYPE html>
<html lang='en'>
<link href="dnd.css" rel="stylesheet">
<head>
<title>Dungeons and Dragons&trade; v3.5<h1></title>
<meta name="viewport"
content="width=device-width, initial-scale="1.0">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<?php 

//access the file that is keeping the current visitor counter
$file ="counter.txt";

//open the file and set permissions to read plus write
$handle = fopen($file, 'r+');

//conditional to verify the file opened
if (!$handle) {
 echo "<p> Cannot open counter.txt </p>";
 exit;
} 

//get the count from the file
$data=fread($handle,512);

//add the new visitor
$count=$data+1;

//prints the count on the page
print"You are visitor number $count.";

//puts the pointer back to the beginning of the file
fseek($handle,0);

//saves the new count to the file
fwrite($handle, $count);

//close file
fclose($handle);

?>
</html>