<?php  
session_start();
$uniqueid=$_SESSION["uid"];
$con=mysqli_connect("localhost","root","","interviewbyte");
$result=mysqli_query($con,"select * from user where UNIQUE_ID='$uniqueid';");
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
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
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
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Profile Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./profile.php">Profile</a></li>
                            <li><a href="./calender.php">Calender</a></li>
                        </ul>
                    </li>
                    
                    
                    <li class="nav-label">Statistical Report</li>
                    <li>
                        <a href="statistics.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Statistics</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">My Meetings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./basicform.php">Meetings</a></li>
                        </ul>
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
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <div class="media-body">
                                        <h3 class="mb-0">APPEAR FOR APTITUDE TEST</h3>
                                        <p class="text-muted mb-0">NOTE: YOUR MARKS SHOULD BE GREATER THAN OR EQUAL TO 7 TO GO FOR INTERVIEW</p>
                                    </div>
                                </div>

                                <h4 >CLICK HERE TO APPEAR FOR APTITUDE TEST</h4><br>
                                <p class="text-muted" style="border:1px solid; text-align:center;"><a href="QuizWizard-master\Quizzer\quiz.php">CLICK HERE</a></p>
                               
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <div class="media-body">
                                        <h3 class="mb-0">APPEAR FOR INTERVIEW</h3>
                                        <p class="text-muted mb-0">NOTE: PLEASE INSTALL ZOOM APP BEFORE APPEARING FOR INTERVIEW</p>
                                    </div>
                                </div>

                                <h4 >SELECT DATE AND TIME</h4><br>
                                <form method="POST" action="" name="datetime">
                                <input type="datetime-local" id="birthdaytime" name="birthdaytime" style="width:95%;"><br><br>
                                <p class="text-muted" style=" text-align:center;"><input type="submit" name="submit" value="Submit"></p>
                                
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <?php

            if($row=mysqli_fetch_assoc($result)){
                $apscore=$row['APPTITUDE_SCORE'];
            }
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $datetime=$_POST['birthdaytime'];
                if($apscore<7){
                    echo "<script>alert('Your aptitude score is less than 7.')</script>";
                }
                else{
                    $update="UPDATE user SET REQ_DTIME='$datetime' WHERE UNIQUE_ID='$uniqueid'";
                    if(mysqli_query($con,$update)){
                     
                    echo "<script>alert('Your request for appointment has been successfully sent.')</script>";
                }
            }
        }
    
        ?>
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by KP VR MS SS</a> 2021</p>
            </div>
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

</body>

</html>