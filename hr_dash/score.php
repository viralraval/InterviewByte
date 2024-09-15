<?php  
session_start();
$hr=$_SESSION["hrid"];
$con=mysqli_connect("localhost","root","","interviewbyte");
$result=mysqli_query($con,"SELECT user.NAME,user.UNIQUE_ID FROM user
INNER JOIN meeting
ON user.UNIQUE_ID = meeting.UNIQUE_ID
WHERE HR_UID='$hr' AND INTERVIEW_SCORE=0");


?>
<!DOCTYPE html>
<html>
<head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>      
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <style type="text/css">
           input {
                  width: 95%;
                  margin-top: 30px;
                  border: 1px solid;
                  border-radius: 2px;
                  height: 2.5rem;
                 }

                 #ib{
                    text-align: center;
                    font-size: 3rem;
                    width: 100%;
                    background-color: black;
                    color: gold;
                    padding: 10px;
                 }

      </style>
</head>
<body>
<h1 id="ib">InterviewByte </h1>
<div class="container-fluid">
    <div class="row">

    <div class="col-sm-8" style="background-color:grey; height: 35rem;width:100%;overflow-y:scroll;">
        <table class="table" id="table" align="left" style="width: 100%; line-height: 20px; color: #000; background: #FFF; text-align: center;">
            <thead class="thead-dark"><tr></tr>
            <t>
                
                <th>THUMBNAIL</th>
                <th>NAME</th>
                <th>USER ID</th>
            </t></thead>
        <?php 

            $s1;

            while($row=mysqli_fetch_assoc($result)){
                 ?>
                 <tbody>
                    <td><i class='fas fa-user-circle' style='font-size:4rem;color: indigo'></td>
                    <td align="center"><?php echo "" .$row['NAME']; ?></td>
                    <td align="center"><?php echo "" .$row['UNIQUE_ID']; ?></td>

                </tbody>
            <?php 
            }

             ?>
        
         </table>
    </div>

    <div class="col-sm-4" style="background-color:darkblue;height: 35rem;width:100%;">
        <h1 style="text-align: center;color: white">Candidate Evaluation Form</h1>
        <form id="sampleForm" name="sampleForm" method="post" action="score.php">
        
        <input type="text" name="name" id="name" value="" placeholder="Name"><br>
        <input type="text" name="userid" id="userid" value="" placeholder="Unique ID"><br>
        <input type="text" name="intscore" id="intscore" placeholder="Interview Score Out of 5"><br>
        <input type="text" name="remark" id="remark" placeholder="Any Remark?"><br>
        <input type="submit" name="sampleForm" value="Submit"><br>
        </form>
   

    </div>

    </div>
</div>

    <script>
        var table = document.getElementById('table'),rIndex;
        for(var i=0;i<table.rows.length;i++)
        {
            table.rows[i].onclick = function()
            {
                document.sampleForm.userid.value = this.cells[2].innerHTML;
                document.sampleForm.name.value = this.cells[1].innerHTML;
            };
        }
    </script>
    <?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
        $name=$_POST["name"];
        $uid=$_POST["userid"];
        $score=$_POST["intscore"];
        $remark=$_POST["remark"];
        $sql="UPDATE user set INTERVIEW_SCORE='$score', REMARK='$remark' WHERE UNIQUE_ID='$uid';";


        $query_run=mysqli_query($con,$sql);

        if ($query_run) {   

            echo "<script>alert('CANDIDATE EVALUATED SUCCESSFULLY');</script>";
        }

        else {
            echo "<script>alert('ERROR');</script>";
        } 
}
     ?>
</body>
</html>