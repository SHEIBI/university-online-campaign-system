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
	
    <title>Apply-Deligate</title>
</head>
<?php include("student_header.php");
include("database.php");?>
<body>
<br><br>
<table width="100%" border="0">
   <tr>
     <td width="232" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"align="right"></span></td>
     <td width="468" height="57"><h1 align="left"><span class="style8">DALIGATE APPLICATION</span></h1></td>
   </tr>

   <tr>
     <td><form name="form1" method="post" action="processdeligate.php" enctype="multipart/form-data" onSubmit="return check();">
 	 <input type="hidden"name="size"value="1000000">      
	   <table width="301" border="0" align="left">
	     <tr>
		    	
     <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name']?>">
	<input type="hidden" name="lid" id="name"  value="<?php echo $_SESSION['lid']?>">
	<input type="hidden" name="gender" id="name"  value="<?php echo $_SESSION['gender']?>">
	<input type="hidden" name="course" id="name"  value="<?php echo $_SESSION['course']?>">
	<input type="hidden" name="phone" id="name"  value="<?php echo $_SESSION['phone']?>">
	<input type="hidden" name="email" id="name"  value="<?php echo $_SESSION['email']?>">



	<tr>
	      <td><div align="left" class="style7">Fee statement:</div></td>
		<td><input type="file"name="image1" required></td>
		</tr>
	
		
		<tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="upload" value="submit">
		   <input type='reset' value='reset'><br><br><br>

		   </td>

		  
         </tr>

       </table>
     </form></td>
   </tr>
 </table><br><br><br><br><br><br><br><br><br><br><br><br><br>



 <?php include("footer.php");?>
    
</body>
</html>