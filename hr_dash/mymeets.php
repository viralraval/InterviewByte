<?php  
session_start();
$hr=$_SESSION["hrid"];
$con=mysqli_connect("localhost","root","","interviewbyte");
$result=mysqli_query($con,"select * from meeting where HR_UID='$hr'");
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Meetings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">

		a{
			color: #171717;
			text-decoration: none;

		}
		a:hover{
			color: white;
			background-color: green;
			border-color: grey;
		}
	</style>
</head>
<body style="background-color: grey">
		<table class="table" id="table" align="left" style="width: 100%; line-height: 20px; color: #000; background: #FFF; text-align: center;">
		<thead class="thead-light"><tr></tr>
		<t>
			
			<th>MEETING LINK</th>
			<th>USER ID</th>
			<th>DATE-TIME</th>
			<th>ACTION</th>
		</t></thead>
		<?php 

			$s1;

			while($row=mysqli_fetch_assoc($result)){ 
				?> 
			<tbody> 

				<td align="center"><a href=""><?php echo "" .$row['MEETING_LINK']; ?>
				</td></a> <td align="center"><?php echo "" .$row['UNIQUE_ID']; ?>
				</td> <td align="center"><?php echo "".$row['DATE_TIME']; ?>
				</td> <td align="center"><?php echo "" . '<a href="' . $row['MEETING_LINK'] . '" style="border:1px solid;padding:5px;text-decoration:none">' .   "JOIN MEET" . '</a>' . "" ;?></td>
 
			</tbody>
			<?php 
			}

			 ?>
		
	</table>
</body>
</html>