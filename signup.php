<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

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
  <style type="text/css">
  	select{
  		width: 100%;
  		height: 2.5rem;
  	}
  </style>

</head>

<body class="body-wrapper">

<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown active dropdown-slide">
          <a class="nav-link" href="index.php"  data-toggle="dropdown">
            <span></span>
          </a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.php">About Us<span>/</span>
          </a>
        </li>
        
         
         
        
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact<span>/</span>
		  </a>
        </li>
        
        
		
		<li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
        </li>
      </ul>
      
	  
	  <a href="signup.php" class="ticket">
	  <img src="images/icon/ticket.png" alt="ticket">
		<span>Not Registered? Sign Up</span>
      </a>
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->


<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>SIGN UP</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				  <li class="breadcrumb-item active">SIGN UP</li>
				</ol>
			</div>
		</div>
	</div>
</section>



<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Register Here</h3>
                    <form action="signup_input.php" method= "POST">
                        <fieldset class="p-4">
                            <input type="text" placeholder="Username" class="border p-3 w-100 my-2" id="username" name="username">
                            <input type="number_format" placeholder="Mobile number" class="border p-3 w-100 my-2" id="mobile" name="mobile">
                            <input type="email" placeholder="Email-ID" class="border p-3 w-100 my-2" id="email" name="email"><br><br>
                            <select name="branch">
                            <option value="">-----Branch-----</option>
                              <option value="Information Technology">Information Technology</option>
                              <option value="Computer Engineering">Computer Engineering</option>
                              <option value="Electronics and Telecommunication">Electronics and Telecommunication</option>
                              <option value="Civil Engineering">Civil Engineering</option>
                              <option value="Aerospace Engineering">Aerospace Engineering</option>
                              <option value="Automobile Engineering">Automobile Engineering</option>
                              <option value="Chemical Engineering">Chemical Engineering</option>
                              <option value="Mechanical Engineering">Mechanical Engineering</option>
                              <option value="Electrical Engineering">Electrical Engineering</option>
                            </select><br><br>
                            <select name="type">
                            	 <option value="">-----Type-----</option>
                            	  <option value="HR">HR</option>
                            	   <option value="user">Interviewee / User</option>
                            </select><br><br>

                            <input type="password" placeholder="Password" class="border p-3 w-100 my-2" id="password" name="password">
							
                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
                            </div>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3" name="register">Register</button>
                            <a class="mt-3 d-block  text-primary" href="#">Forget Password?</a>
                        </fieldset>
                        
  
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <img src="images/footer-logo.png" alt="logo" class="img-fluid">
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">InterviewByte</a> &#169; 2021 All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
 
  <!-- Custom Script -->
  <script src="js/custom.js"></script>



</body>

</html>
