<?php

echo "Congratulations!!";
echo "<br>";
echo "THIS IS THE FINALISED DATA";
echo "<br><br>";

if(isset($_POST['search']))
{
	echo "Travel From:".$_POST['input'];
	echo "<br>";
	echo "Travel To:".$_POST['output'];
	echo"<br>";
	echo "CHECK IN DATE:".$_POST['calendar1'];
	echo "<br>";
	echo "CHECK OUT DATE:".$_POST['calendar2'];
	echo"<br>";
}

?>
<br><br>
<a href="project.php">Return To Main</a>