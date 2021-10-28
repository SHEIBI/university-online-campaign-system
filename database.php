<?php
$host="localhost";
$user="root";
$pwd="";
$db="mountkenyadata";

$myconn=mysqli_connect($host,$user,$pwd);
if(!$myconn)
{
	echo "Error";
}
else{
	echo"connected Successfully<br>"
}
$mydb=mysqli_select_db($myconn,$db);
if(!$mydb)
{
	echo"Error";

}
else
?>