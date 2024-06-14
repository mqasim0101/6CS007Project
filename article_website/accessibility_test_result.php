<?php
session_start();
     include("website_connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Accessibility Test Resut Send Data Form</title>
    </head>
    <body>
        <h1>Use the Form below to Send Data to yourself!</h1>
        <div>
             <form action="accessibility_functions.php" method="get">
                  <label for="user_name">User Name</label>
                  <input type="text" name="user_name" placeholder="johndoe134@yahoo.com">
                  <label for="email_address">Email Address</label>
                  <input type="email" name="email_address" placeholder="johndoe134@yahoo.com">
                  <label for="colour_blindness">Colour Blindness</label>
                  <input type="text" name="colour_blindness" placeholder="normal/protanopia/deuteranopia">
                  <button>Submit</button>
             </form>
        </div>
        <br><br><br>
        <button><a href="home.php">Back to Home </a></button>
    </body>
</html>