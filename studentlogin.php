
<?php
include("database.php");
if(!empty($_POST['lid']) && !empty($_POST['password']))// check if username and password is empty
{

$lid = mysqli_real_escape_string($myconn,$_POST['lid']);
$password = mysqli_real_escape_string($myconn,md5($_POST['password']));

$checklogin = mysqli_query($myconn,"SELECT * FROM mk_users WHERE lid='".$lid."' AND password = '".$password."'");

if(mysqli_num_rows($checklogin) == 1) //check if username is user exists
{
$row = mysqli_fetch_array($checklogin); // retrieve the user from the table

session_cache_expire();
session_start();
$_SESSION['lid']=$row['lid'];
$_SESSION['name']=$row['name'];
$_SESSION['course']=$row['course'];
$_SESSION['gender']=$row['gender'];
$_SESSION['phone']=$row['phone'];
$_SESSION['email']=$row['email'];
$_SESSION['position']=$row['position'];
$_SESSION['action']=$row['action'];

setcookie('lid',$lid, time()+60*60*20);
header("location:studentsignin.php");
   
}
else 
{?>
<script>
alert("Wrong Reg number or Password.Try again",window.location="index.php");
</script>
<?php

}
}
?>
