
<?php include("student_header.php"); ?>
<body>
<form align="center">
<?php
session_start();
require_once('database.php'); // include connection code
//receive data from form and assign to variables

if(isset($_POST['submit'])){

$name=$_POST['name'];
$lid=$_POST['lid'];
$gender=$_POST['gender'];
$course=$_POST['course'];
//$image1=$_POST['image1'];
$image1=$_FILES['image1']['name'];

//$image2=$_POST['image2'];
//$image2=$_FILES['image2']['name'];

$position=$_POST['position'];
$phone=$_POST['phone'];
$email=$_POST['email'];

//print  the details

echo "Fee statement : ".$image1."<br>";
echo "position : ".$position."<br>";

//insert details into database
//$insert="INSERT INTO mk_candidateapp(name,lid,gender,course,image1,position,phone,email)
     //values('$name','$lid','$gender','$course','$image1','$position','$phone','$email')";


mysqli_query($myconn, "INSERT INTO `mk_candidateapp` (name,lid,gender,course,image1,position,phone,email)
     values('$name','$lid','$gender','$course','$image1','$position','$phone','$email')");


//mysqli_query($myconn, "INSERT INTO `chat_history` (`name`,`lid`, `msg`,`date`) VALUES ('$name','$lid','$msg',CURRENT_TIMESTAMP)");


//if(mysqli_query($myconn,$insert))
{
		move_uploaded_file($_FILES['image1']['tmp_name'],"picture/$image1");
		
		//move_uploaded_file($_FILES['image2']['tmp_name'],"picture/$image2");		
		echo"<script>alert('details Successfully send.Thank You!')</script>";
	
echo "<i style='color:green'>APPLICATION send successfully.WAIT FOR APPROVAL.THANK You!</i><br>";
//echo "<a href='display1.php'>see display</a><br>";
}
//else
	


//echo "<a href='application.php'>Failed. Try again</a>";
}
?>

</form>
</body>