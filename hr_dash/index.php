<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="CSS/interviewbyte.css">
</head>
<html>
	<body>
		<div class="forma">
			<form action="index.php" method="post">
				  <label for="dtime">Time : </label><br>
				  <input type="datetime-local" id="fname" name="fname">
				  <input type="submit" name="someAction" value="Submit" />
			</form> 
		</div>
	</body>
</html>


<?php
include('config.php');
include('api.php');
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
{
  	$c=strtotime($_POST["fname"]);
	$d=strtotime($_POST["fname"])+ 60*60*2;
	$arr['topic']='InterviewByte Round';
	$arr['start_date']=date("Y-m-d h:i:sa", $d);
	$arr['duration']=30;
	$arr['password']='hello';
	$arr['type']='2';
	$result=createMeeting($arr);
	
	if(isset($result->id))
	{
		echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
		echo "Password: ".$result->password."<br/>";
		echo "Start Time: ".date("Y-m-d h:i:sa", $c)."<br/>";
		echo "Duration: ".$result->duration."<br/>";
	}
	else
	{
		echo '<pre>';
		print_r($result);
	}
}
?>