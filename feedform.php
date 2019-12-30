<?php

echo "Congratulations!!";
echo "<br>";
echo "YOUR FEEDBACK FORM HAS BEEN SUBMITTED";
echo "<br><br>";

if(isset($_POST['submit']))
{
	echo "Name:".$_POST['name'];
	echo "<br>";
	echo "E-mail:".$_POST['email'];
	echo"<br>";
	echo "FEEDBACK:".$_POST['comment'];
	echo "<br>";
	echo "Website:".$_POST['website'];
	echo"<br>";
	echo "Feedback:".$_POST['comment'];
	echo"<br>";
}

?>
<br><br>
<a href="project.php">Return To Main</a>

  			
