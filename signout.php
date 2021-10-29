<?php
session_start();
session_destroy();
session_unset('lid');

if(isset($_COOKIE['lid'])and isset($_COOKIE['password'])){
	$lid=$_COOKIE['lid'];
	$password=$_COOKIE['password'];	
	setcookie('lid',$lid,time()-1);
	setcookie('password',$password,time()-1);	
}

header("Location: index.php");
?>
