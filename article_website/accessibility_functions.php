<?php
session_start();
      include("website_connect.php");
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $user_name = $_GET['user_name'];
        $email_address = $_GET['email_address'];
        $colour_blindness = $_GET['colour_blindness'];
// checking if all aren't empty and everything is not a number:
        if(!empty($user_name) && !empty($email_address) && !empty($colour_blindness) && !is_numeric($user_name) && !is_numeric($email_address) && !is_numeric($colour_blindness)){
          $sql_add = "insert into `accessibility` (user_name, email_address, colour_blindness) values ('$user_name', '$email_address', '$colour_blindness')";
          // Check if query worked:
            mysqli_query($website_connect, $sql_add); // Save the query:article
            if(mysqli_query( $website_connect, $sql_add)){
                echo "Accessibiltiy Records added successfully! ";
                header("Location: home.php");
                die;// to stop the code from continuing:
            }else{
                echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
                die; // to stop the code from continuing:
            }
        }
        }else{
            echo "Error: " .mysqli_error($website_connect); // print error message displayed here first:
        }
?>

	

