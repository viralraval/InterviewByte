<?php
    extract($_POST);
    $conn=mysqli_connect("localhost","root","","interviewbyte");
    function randomUID() {
        $num = "0123456789";
        $unique_id = array(); //remember to declare $pass as an array
        $numLength = strlen($num) - 1; //put the length -1 in cache
        for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $numLength);
        $unique_id[] = $num[$n];
        }
        return implode($unique_id); //turn the array into a string
    }
    $unique_id1 = randomUID();
    if (isset($_POST['register'])){
        $username=$_POST['username'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $branch=$_POST['branch'];
        $type=$_POST['type'];
        $password=$_POST['password'];
        if($type=="user"){
        	$insert = "INSERT INTO user (NAME, EMAIL, PASWRD, UNIQUE_ID, BRANCH) VALUES ('$username', '$email', '$password', '$unique_id1', '$branch')";
        }

        else{
        	$insert = "INSERT INTO hr (HR_NAME, HR_EMAIL, PASSWORD, HR_UID, HR_BRANCH) VALUES ('$username', '$email', '$password', '$unique_id1', '$branch')";
        }
        
        $query=mysqli_query($conn,$insert);
        echo '<head>

        <!-- SITE TITTLE -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InterviewByte</title>
        
        
        <!-- HOME CSS STYLE -->
        <!-- PLUGINS CSS STYLE -->
        <!-- Bootstrap -->
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Themefisher Font -->  
        <link href="plugins/themefisher-font/style.html" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Magnific Popup -->
        <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- Slick Carousel -->
        <link href="plugins/slick/slick.css" rel="stylesheet">
        <link href="plugins/slick/slick-theme.css" rel="stylesheet">
        <!-- CUSTOM CSS -->
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
      
        <!-- FAVICON -->
        <link href="images/favicon.png" rel="shortcut icon">
      
      </head>';
        echo '<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">';
        echo '<div class="container-fluid p-0">';
        echo '<a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="logo">
            </a>';
        echo '<ul class="navbar-nav mx-auto">';
        echo '<li class="nav-item dropdown active dropdown-slide">
        <a class="nav-link" href="index.php"  data-toggle="dropdown">
          <span></span>
        </a>
        
      </li>';
      echo '<li class="nav-item">
      <a class="nav-link" href="about-us.php">About Us<span>/</span>
      </a>
    </li>';
    echo '<li class="nav-item">
    <a class="nav-link" href="contact.php">Contact<span>/</span>
    </a>
  </li>';
  echo '<li class="nav-item">
  <a class="nav-link" href="login.php">LOGIN</a>
</li>
</ul>';
        echo '<a href="signup.php" class="ticket">
        <img src="images/icon/ticket.png" alt="ticket">
          <span>Not Registered? Sign Up</span>
        </a>';
        echo '</div>
        </div>
      </nav>';
        echo "<br><br><br><br><br><br><br><br><div id='success' style='text-align:center; width:100%; border:3px;'><h1>You have registered sucessfully!</h1></div>";
        echo "<div id='box' style='text-align:center; width:100%; border:3px;' >";
        echo "<p ><h2>Unique id : $unique_id1</h2></p>";
        echo "<a href='login.php' ><h3> Go To login Page! </h3></a>";
        echo "</div>";                            
    }
                            
?>    