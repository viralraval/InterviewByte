<?php 
    //require_once("config.php"); 
	$conn=mysqli_connect("localhost","root","","interview_test");
       ?>
    <!DOCTYPE html> 
     <html>
     <head>
	<title>Next and Previous Buttons in PHP website - Techno Smarter</title>
       </head>
     <body>
	<h1>Website pages in List </h1>
	 <?php 
$result = mysqli_query($conn, "SELECT * FROM registered_user");
while($row = mysqli_fetch_array($result)) {         
            
        
            echo '<li><a href="show.php?username='.$row['username'].'">'.$row['mobile'].'</a></li>';


            echo "<hr>";     
                    
        }
        

	 ?>

   </body>
    </html>
