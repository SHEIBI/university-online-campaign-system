<?php
if(isset($_POST["view"]))
{
	$connect=mysql_connect("localhost","root","","mountkenya");
	if($_POST["view"] !='')
	{
		$update_query="UPDATE chat_history SET chat_status=1 WHERE chat_status=0";
		mysqli_query($connect, $update_query);
	}
	$query="SELECT*FROM chat_history ORDER BY id  DESC LIMIT 5";
	$result=mysqli_query($connect, $query);
	$output='';
	if(mysqli_num_rows($result) > 0)
	{
while ($row=mysqli_fetch_array($result)) {
	# code...
	$output .='
<li>
<a href="#">
<strong>'.$row["name"].'</strong><br/>
<small><em>'.$row["msg"].'</em></small>
</a>
</li>
	';
}
	}
	else
	{
		$output .='<li><a href="#" class="">No chat Found</a></li>';
	}
	$query_1="SELECT* FROM chat_history WHERE chat_status=0";
	$result_1= mysqli_query($connect, $query_1);
	$count=mysqli_num_rows($result_1);
	$data=array(
'chat'   =>output,
'unseen_chat' => $count
	);
}
?>