<?php session_start(); ?>
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
	
    <title>Notifications</title>
</head>
<?php include("student_header.php");
include("database.php");?>
<body>
<h2><center>Notification</CENTER></h2>

<table class="table">   
  <thead class="thead-light">
	<tr>
		
		<th>ID</th>
		<th>UPDATE</th>
		<th>DATE AND TIME</th>
	</tr>
	 </thead>
  <tbody>
  <?php
$result=mysqli_query($myconn,"select * from mk_update");
// fetch and loop the records
      while($row = mysqli_fetch_array($result)) // fetch the row values
{
$id=$row['id'];
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td><I>".$row['text']."</I></td>";
echo "<td style='color:blue'><i>".$row['time']."</i></td>";


}

?>
	  </tbody>
</table></br></br></br>
<?php include("footer.php");?>
</body>
</html>