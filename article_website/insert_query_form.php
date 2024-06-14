<?php
session_start();
     include("website_connect.php");
     include("navigation_bar.php");
	 include("index.php"); // to check user's login status:
	 // check the form's method type:
	 include("bootstrap_style_link.php");
?>
<DOCTYPE html!>
<html lang="en">
     <head>
		 <!-- Add website style file here: -->
		 <link rel="stylesheet" href="style.css">
	      <!-- All meta tags link here: -->
	      <meta charset="UTF-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <title>Contact Us: </title>
		 
	 </head>
	 <body>
	     <h1>Contact Us: </h1>
		 <!-- Instruction statement below: -->
		 <p><i>In here you will be able to contact me using the form below:</i></p>
		 <div class="container my-5">
		     <form method= "post" enctype= "multipart/form-data" action= "queries_or_questions.php">
			     <!-- Let's add additional methods here: -->
				 <label for="user_contacted">Your Full User Name</label>
				 <input type= "text" name= "user_contacted" placeholder="Enter your full name" autocomplete="off" required>
				 <br><br>
				 <label for="query_or_question">What is Your Query About</label>
				 <input type= "text" id= "text" name= "query_or_question" placeholder= "I'm having issues with my file system:" autocomplete="off" required>
				 <br><br>
				 <label for="query_type">Query Type<label>
				 <input type="text" name="query_type" placeholder="urgent" autocomplete="off" required>
				 <br><br>
				 <!-- Submit button here: -->
				 <button type="submit" name ="submit11" class="btn btn-primary">Submit</button>
				 <!-- Reset button here: -->
				 <button type="reset" class="btn btn-secondary ml-2">Reset</button>
			 </form>
		 </div>
		 <br><br><br><br>
		 <!-- Option to go back to main menu: -->
		 <button><a href="home.php">Back to Home! </a></button>
	 </body>
</html>