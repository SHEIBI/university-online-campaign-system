<?php
session_start();
?>
<head>
<title>Online campaign - deligates List delete</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include("student_header.php"); ?>
<body>
<form align="center">

<?php
require_once('database.php'); // include connection code
//receive data from form and assign to variables

if(isset($_POST['upload'])){

$name=$_POST['name'];
$lid=$_POST['lid'];
$gender=$_POST['gender'];
$course=$_POST['course'];
//$image1=$_POST['image1'];
	$image1=$_FILES['image1']['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
//print  the details


//echo "course : ".$course."<br>";
echo "Fee statement : ".$image1."<br>";
//echo "image of Applicant: ".$image2."<br>";


//insert details into database
//$insert="INSERT INTO mk_deligateapp(name,lid,gender,course,image1,phone,email)
     //values('$name','$lid','$gender','$course','$image1','$phone','$email')";
//echo "position : ".$position."<br>";

mysqli_query($myconn, "INSERT INTO `mk_deligateapp` (name,lid,gender,course,image1,phone,email)
     values('$name','$lid','$gender','$course','$image1','$phone','$email')");

//if(mysqli_query($myconn,$insert))
	
{
		move_uploaded_file($_FILES['image1']['tmp_name'],"picture/$image1");
		//move_uploaded_file($_FILES['image2']['tmp_name'],"picture/$image2");


		
		echo"<script>alert('details Successfully send.Thank You!')</script>";
	
//echo "<i>Details send successfully</i><br>";
echo "<i style='color:green'>APPLICATION send successfully.WAIT FOR APPROVAL.THANK You!</i><br>";
}
//else
//echo "<a href='deligateform.php'>Failed. Try again</a>";
}
?>

</form>
</body>


