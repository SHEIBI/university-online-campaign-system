<html>
<head>
<title>chatbox details</title>
<link href="style1.css" rel="stylesheet" type="text/css">
<?php include("student_header.php");?>
</head>
<body>
<?php
session_start();
require_once('database.php');
if(isset($_POST['send'])){
$msg=$_POST['msg'];
$name=$_POST['name'];
$lid=$_POST['lid'];
mysqli_query($myconn, "INSERT INTO `chat_history` (`name`,`lid`, `msg`,`date`) VALUES ('$name','$lid','$msg',CURRENT_TIMESTAMP)");

header("location:chat.php");
//exit;
}

?>



</body>
</html>