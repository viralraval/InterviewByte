<?php


$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'interviewbyte');

if(isset($_POST['login'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user where UNIQUE_ID='".$uname."'AND PASWRD='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
    	session_start();
        $_SESSION["uid"]=$uname;
        header('Location: dashboard/profile.php');
        
    }



    else{
    	 $sql="select * from hr where HR_UID='".$uname."'AND PASSWORD='".$password."' limit 1";
    	 $result=mysqli_query($con,$sql);

    	 if(mysqli_num_rows($result)==1){
    	 	session_start();
	        $_SESSION["hrid"]=$uname;
	        header('Location: hr_dash/profile.php');

    	 }

    	 else {
	        header('Location: error.html');
	        exit();
	     }
    }
        
}                     
?>