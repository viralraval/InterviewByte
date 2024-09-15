<?php  
session_start();
$hr=$_SESSION["hrid"];
$con=mysqli_connect("localhost","root","","interviewbyte");
$result=mysqli_query($con,"select * from user where IS_ASSIGNED=0 AND BRANCH IN ( select HR_BRANCH from hr where 
    HR_UID='$hr');");
$hr=$_SESSION["hrid"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>InterviewByte</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/ilogo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/ilogo.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/ilogo.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">

                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="../index.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">User Dashboard</li>
                    
                    <li>
                        <a href="score.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">EVALUATE CANDIDATES</span>
                        </a>
                    </li>

                    <li>
                        <a href="mymeets.php" aria-expanded="false">
                            <i class="far fa-handshake"></i><span class="nav-text">MY MEETINGS</span>
                        </a>
                    </li>

	
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
		<table class="table" id="table" align="left" style="width: 100%; line-height: 20px; color: #000; background: #FFF; text-align: center;">
		<thead class="thead-dark"><tr></tr>
		<t>
			
			<th>THUMBNAIL</th>
			<th>NAME</th>
			<th>USER ID</th>
			<th>FIELD</th>
			<th>EMAIL ID</th>
			<th>REQUESTED DATE-TIME</th>
			<th>ACTION</th>
		</t></thead>
		<?php 

			$s1;

			while($row=mysqli_fetch_assoc($result)){
				 ?>
				 <tbody>
					<td><i class='fas fa-user-circle' style='font-size:4rem;color: indigo'></i></td>
					<td align="center"><?php echo "" .$row['NAME']; ?></td>
					<td align="center"><?php echo "" .$row['UNIQUE_ID']; ?></td>
					<td align="center"><?php echo "" .$row['BRANCH']; ?></td>
					<td align="center"><?php echo "" .$row['EMAIL']; ?></td>
					<td align="center"><?php echo "" .$row['REQ_DTIME']; ?></td>
					<td align="center"><a href="#" style="border: 1px solid;padding: 5px;">ACCEPT</a></td>

				</tbody>
			<?php 
			}

			 ?>
		
	</table>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">

        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <form id="sampleForm" name="sampleForm" method="post" action="profile.php">
    <input type="hidden" name="name" id="name" value="">
    <input type="hidden" name="rdate" id="rdate" value="">
    <input type="hidden" name="userid" id="userid" value="">
	<input type="submit" name="sampleForm" value="Submit">
	</form>
	<script>
		var table = document.getElementById('table'),rIndex;
		for(var i=0;i<table.rows.length;i++)
		{
			table.rows[i].onclick = function()
			{
				document.sampleForm.userid.value = this.cells[2].innerHTML;
				document.sampleForm.name.value = this.cells[1].innerHTML;
				document.sampleForm.rdate.value = this.cells[5].innerHTML;
				document.forms["sampleForm"].submit();
			};
		}
	</script>

<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
  	 	
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'interviewbyte');
include('config.php');
include('api.php');
  	$c=strtotime($_POST["rdate"]);
	$d=strtotime($_POST["rdate"])+ 60*60*2;
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

$ll=$result->join_url;
$uds=$_POST['userid'];
$dat=$_POST["rdate"];
$pass=$result->password;

$sql="INSERT INTO meeting (MEETING_LINK,UNIQUE_ID,MEET_PASSWORD,DATE_TIME,IS_ACCEPTED,HR_UID) VALUES ('$ll','$uds','$pass','$dat',1,'$hr')";

$userup="UPDATE user set IS_ASSIGNED=1 where UNIQUE_ID='$uds'";

$query_run=mysqli_query($con,$sql);
$user_run=mysqli_query($con,$userup);

if ($query_run && $user_run) {	

	echo "<script>alert('MEETING SCHEDULED!');</script>";
}} 
?>
</body>

</html>