<?php
session_start();
            if(isset($_SESSION['uid'])){
            $unique_id=$_SESSION["uid"];
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
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./basicform.php">Basic Form</a></li>
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
                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-3">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="icon-home"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">0</h2>
                                        <h5 class="card-widget__subtitle">Tests</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-4">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="icon-emotsmile"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">0</h2>
                                        <h5 class="card-widget__subtitle">Tests Completed</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>

                <div class="row">
                    
                    

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="display-5"><i class="icon-user gradient-4-text"></i></span>
                                    <h2 class="mt-3">0 Users</h2>
                                    <p>Currently active</p><a href="javascript:void()" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Add
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="display-5"><i class="icon-grid gradient-9-text"></i></span>
                                    <h2 class="mt-3">2 MOCK APTITUDE TESTS</h2>
                                    <p>Currently inactive</p><a href="javascript:void()" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Appear
                                        now</a>
                                    <p> <button type="submit" onclick="myFunction()">Appear now?</button></p>
                                    <script>
                                        function myFunction() {
                                           location.replace("aptitude.php");
                                        }
                                    </script>
                                    <?php
                                        $conn=mysqli_connect("localhost","root","","sampledata");
                                        $sql="SELECT * FROM questions
                                            ORDER BY RAND()
                                            LIMIT 1"or die("Bad Query: $sql");
                                        $sql1="SELECT * FROM students
                                            ORDER BY RAND()
                                            LIMIT 1"or die("Bad Query: $sql");
                                        $rwo=mysqli_query($conn,$sql);
                                        $rwo1=mysqli_query($conn,$sql1);
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        while($row=mysqli_fetch_array($rwo)){   
                                        echo "".$row["title"] ;
                                        }   
                                        while($row1=mysqli_fetch_array($rwo1)){   
                                        echo "".$row1["score"] ;
                                        }    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body">
                                <h5 class="text-muted">No. of Tests This Month</h5>
                                
									
                                <div class="mt-4">
                                    <h4>Test No. 3</h4>
                                    
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-1" style="width: 80%;" role="progressbar"><span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4>Test No. 2</h4>
                                    
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4>Test No. 1</h4>
                                    
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-4" style="width: 35%;" role="progressbar"><span class="sr-only">35% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="mt-4">
                                    <h4>5,250</h4>
                                    <h6 class="m-t-10 text-muted">Budget Pending <span class="pull-right">70%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-8" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
    
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Today Progress</div>
                                    <div class="stat-digit gradient-3-text"><i class="fa fa-usd"></i>8500</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Progress Detail</div>
                                    <div class="stat-digit gradient-4-text"><i class="fa fa-usd"></i>7800</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar gradient-4" style="width: 40%;" role="progressbar"><span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Tests Completed</div>
                                    <div class="stat-digit gradient-4-text"><i class="fa fa-usd"></i> 500</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar gradient-4" style="width: 15%;" role="progressbar"><span class="sr-only">15% Complete</span>
                                    </div>
                                </div>
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
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
               <p>Copyright &copy; Designed & Developed by KR VR MS SS</a> 2021</p>
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
    <script src="./js/dashboard/dashboard-2.js"></script>    


    <script>
        window.localStorage.clear();
        $(document).ready(function () {

$('#list-items').html(localStorage.getItem('listItems'));

$('.add-items').submit(function(event) 
{
event.preventDefault();

var item = $('#todo-list-item').val();
if(item) 
{
$('#list-items').append("<li><div class='round d-inline-block'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>" + item + "</label><a class='remove'><i class='fa fa-trash'></i></a></li>");




// <div class='round'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>

// dfdfdf</label>





localStorage.setItem('listItems', $('#list-items').html());

$('#todo-list-item').val("");
}

});

$(document).on('change', '.checkbox', function() 
{
if($(this).attr('checked')) 
{
$(this).removeAttr('checked');
} 
else 
{
$(this).attr('checked', 'checked');
}

$(this).parent().toggleClass('completed');

localStorage.setItem('listItems', $('#list-items').html());
});

$(document).on('click', '.remove', function() 
{
$(this).parent().remove();

localStorage.setItem('listItems', $('#list-items').html());
});

});
    </script>
</body>

</html>
<?php
            }?>