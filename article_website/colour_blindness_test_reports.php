<?php
//error_reporting();
     include("website_connect.php"); // to connect it to the database:
     include("navigation_bar.php"); // to connect it with the navigation bar:
?>
<!Doctype html>
<html lang="en" id="">
    <head id="">
        <!-- Manual style -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title id="title2">Display Colour Blindness Test Reports: </title>
    </head>
    <body id="">
        <h1>View Your Colour Blindness Test Reports Here: </h1>
        <p>Here you can view all the Articles here available: </p>
        <!--- table bootstrap here: -->
        <div class="container my-5" id="">
            <table class = "table" id="">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Colour Blindness Test Result</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            // select query:
            $sql_display = "Select * from `accessibility`";
            $result = mysqli_query($website_connect, $sql_display);
            while($row = mysqli_fetch_assoc($result)){
                $id=  $row['id'];
                $user_name= $row['user_name'];
                $email_address= $row['email_address'];
                $colour_blindness= $row['colour_blindness'];
                $date= $row['date'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$user_name.'</td>
                <td>'.$email_address.'</td>
                <td>'.$colour_blindness.'</td>
                <td>'.$date.'</td>
                </tr>';
            }
            ?>
        </div>
                </tbody>
            </table>
            <br><br><br><br>
            <!-- Display message here: -->
            <button id="" class= ""><a href="home.php">Back to Home:</a></button>
    </body>
</html>