<?php

//USEFUL FOR CHECKING ERRORS.
// if (!$check1_res) {
//     printf("Error: %s\n", mysqli_error($con));
//     exit();
// }

	session_start();



	$con = mysqli_connect("localhost","root","","quiz");



	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }


	else {
		  // Checks if username and password both are set properly!


				//Checks if username/password field is not empty.
				

				


						 

						 // echo $abc[0];

						 	// Checks if the username and password matches in the database.

							 	// $username = mysql_real_escape_string($_POST["username"]);
								// $password = mysql_real_escape_string($_POST["password"]);


								function nonRepeat($min,$max,$count) { 

									    //prevent function from hanging  
									    //due to a request of more values than are possible     
									    if($max - $min < $count) { 
									        return false; 
									    } 
									     
									   $nonrepeatarray = array(); 
									   for($i = 0; $i < $count; $i++) { 
									      $rand = rand($min,$max); 
									       
									      //ensure value isn't already in the array 
									      //if it is, recalculate the rand until we 
									      //find one that's not in the array 
									      while(in_array($rand,$nonrepeatarray)) { 
									        $rand = rand($min,$max); 
									      } 
									       
									      //add it to the array 
									      $nonrepeatarray[$i] = $rand; 
									   } 
									   return $nonrepeatarray; 
									} 
						


									//EDIT THIS TO MAKE IT OF DYNAMIC 'MAX' LENGTH. 20 is the max length.
									$question_numbers = nonRepeat(1, 20, 10);
									$quesno=0;

										?>

								<html>

									<head>

										<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
										<script type="text/javascript" src="js/jquery.countdown.js"></script>

										<script type="text/javascript">
										// I'll be using jQuery countdown plugin by Rendro -> http://rendro.github.io/countdown/
										// READ THE ABOVE GIVEN LINK TO UNDERSTAND THE PLUG-IN AND ITS OPTIONS.
											$(function(){

												
												$('.countdown.simple').countdown({

													date : + (new Date) + 600000,
													render : function(data){
																$(this.el).html(this.leadingZeros(data.min, 2) + " minutes " + this.leadingZeros(data.sec, 2)+ " seconds" );
															},
													onEnd: function(){
																$('#quizform').submit();
															}
												});




											});


										</script>

										<link href="css/quiz.css" rel="stylesheet" type="text/css">

									</head>

									<body>


										<h1> DRDO Quiz </h1>

										<div class="countdown simple"></div>


										<form action="score.php" method="POST" id="quizform">
										
										<?php

											// $con=mysqli_connect("localhost","root","bits&bytes","quiz");

												



									
											//editr '10' below to change the number of questions that will appear in the quiz.
											for($i=0;$i<10;$i++){
												$quesno = $quesno+1;
												
												$result2 = mysqli_query($con,"SELECT QUESTION FROM questions where QUES_ID = $quesno");
												$question = mysqli_fetch_row($result2);
												
												$result3 = mysqli_query($con, "SELECT OPT_A FROM questions where QUES_ID = $quesno");
												$option1 = mysqli_fetch_row($result3);

												$result4 = mysqli_query($con, "SELECT OPT_B FROM questions where QUES_ID = $quesno");
												$option2 = mysqli_fetch_row($result4);

												$result5 = mysqli_query($con, "SELECT OPT_C FROM questions where QUES_ID = $quesno");
												$option3 = mysqli_fetch_row($result5);

												$result6 = mysqli_query($con, "SELECT OPT_D FROM questions where QUES_ID = $quesno");
												$option4 = mysqli_fetch_row($result6);

												$j = $i+1;
												echo "<div id='question'>Question ".$j.".  ".$question[0]."<br><br>";


												?>



												
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="1"> <?php echo $option1[0] ?>
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="2"> <?php echo $option2[0] ?>
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="3"> <?php echo $option3[0] ?>
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="4"> <?php echo $option4[0] ?>
												</div>

												





												<?php								

												echo "<br>";		
											}
										
										$_SESSION['question_numbers'] = $quesno;

										?>
										<input type="submit" value="Submit" name="Submit">

										</form>
									</body>



								</html>
								

								<?php



							 }

							 






							 

				


			


		?>

