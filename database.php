<?php
$host="localhost";
$user="root";
$pwd="";
$db="mountkenya";

$myconn=mysqli_connect($host,$user,$pwd);
if(!$myconn)
{
 echo "Connection failed";
}
else{
//echo "Connected successfully<br>";
}
//select the database
$mydb=mysqli_select_db($myconn,$db);
if(!$mydb)
{
echo "ERROR";

}
else
//echo "Database  selected<br>";
?>