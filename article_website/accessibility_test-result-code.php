<?php
session_start();
include_once("website_connect.php");
include("auto_config_accessibility_result.php");

// Define expected responses for different color vision deficiencies
$expectedResponses = array(
    'normal' => 9,
    'protanopia' => 5,
    'deuteranopia' => 7,
    // Add more deficiency types as needed
);

// Check if the form was submitted
if (isset($_GET['response']) || isset($_GET['submit1']) || isset($_GET['submit2'])) {
    // Get the user's response
    $userResponse = isset($_GET['response']) ? $_GET['response'] : ($_GET['submit1'] ? 'Nothing' : 'Not Sure');

    // Determine the color vision deficiency based on the user's response
    $deficiency = 'normal';
    $minDifference = PHP_INT_MAX;
    foreach ($expectedResponses as $type => $expectedResponse) {
        $difference = abs($userResponse == 'Nothing' || $userResponse == 'Not Sure' ? PHP_INT_MAX : ($userResponse - $expectedResponse));
        if ($difference < $minDifference) {
            $deficiency = $type;
            $minDifference = $difference;
        }
    }

    // Apply accessibility adjustments based on the detected deficiency
    // ...
    // (Add your code here to modify styles, provide alternative representations, etc.)
    // ...

    echo "Based on your response, your detected color vision deficiency is: $deficiency";
    //header("Location: accessibility_test_result.php");
} else {
    echo "No response submitted.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <br><br><br><br>
        <button><a href="accessibility_test.php">Take Test Again</a></button>
        <br><br><br>
        <button><a href="accessibility_test_result.php">Email yourself a copy! </a></button>
        <br><br><br>
        <button><a href="home.php">Back to Home </a></button>
    </body>
</html>