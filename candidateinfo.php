<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
    <title>CandidateInfo</title>
</head>

<body>
<?php
session_start();
include("student_header.php");
include("database.php");

$id=$_REQUEST['id'];


echo "<h2><center> CANDIDATE Info</center></h2>";
$result=mysqli_query($myconn,"select * from mkcandidate_user where id='$id'");

//Create table headers
//echo "<table border='1'width='60'height='60' align='center'>";
echo "<table  align='center'>";

// fetch and loop the records
//while($row=mysqli_fetch_row($result))// fetch the row values
while($row = mysqli_fetch_array($result)) // fetch the row values
{

$id=$row['id'];
echo "<tr>";
//echo "<td>".$row['id']."</td>";
    echo"<td>";
	echo"<div id='img_div'>";
	echo"<img src='picture/".$row['image']."'style='width:190px;height:190px;margin:auto;border-radius:50%'>";
echo"</td>";
echo"</tr>";

echo"<tr>";
echo "<td><i><center>".$row['name']."</center></i></td>";
echo"</tr>";

echo"<tr>";
echo "<td><i><center>".$row['gender']."</center></i></td>";
echo"</tr>";

echo"<tr>";
echo "<td><B><center>".$row['lid']."</center></B></td>";
echo"</tr>";

echo"<tr>";
echo "<td><B><center>".$row['course']."</center></B></td>";
echo"</tr>";

echo"<tr>";
echo "<td><i><center>".$row['phone']."</center></i></td>";
echo"</tr>";

echo"<tr>";
echo "<td><i><center>".$row['email']."</center></i></td>";
echo"</tr>";

echo"<tr>";
echo "<td><i><center>".$row['position']."</center></i></td>";
echo"</tr>";
}
echo "</table>";
?>
<br><br><br>
    <?php include("footer.php");?>
</body>
</html>