<style>
.output{
	background-color: white;
	box-shadow: 0px 1px 1px #000;
	height: 350px;
	margin-bottom: 20px;
	overflow: scroll;
}
</style>

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
	
    <title>Chat</title>
</head>
<?php include("student_header.php");
include("database.php");
session_start();
?>

<body>
<br>
<h4 class='style7' align=center>chat<h6 style="background-color: #6495ed;color: white;"><center><?php echo $_SESSION['lid'] ?>-Online</center></h6></h4>
<div class="output" align="left">

	<?php 
	//session_start();
$sql="SELECT * FROM chat_history ";
$result=mysqli_query($myconn,$sql);

if($result ->num_rows >0){
	while ( $row=$result ->fetch_assoc() )
	 {
	echo "<td ><B style='color:grey;'>" .$row['name']."</B></td>" ."::-<i style='color:green;'> " . $row["msg"]."</i><B>:::-</B><B><i>"  .$row["date"].  "</B></i><br>";	
	echo "<br>";
	}

}else{
	echo "0 msg";
}
//$myconn->close();
//function updateChat(){
	//setTimeout(updateChat, 500);}
	?>
    </div>

<form name="form1" method="post"action="processchatBox.php" align="center" onSubmit="return check();">

	<input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name']?>">
	<input type="hidden" name="lid" id="name"  value="<?php echo $_SESSION['lid']?>">

<div>
<textarea name="msg"cols="100"rows="4"placeholder="chat Here.." required></textarea>
</div>
<div>
<br><input type="submit"name="send"value="send"  style="height: 40px; width: 80px; font-size: 16px; color: blue">
<input type='reset' value='reset'>

</div>
</form>

</div>




    
</body>
</html>