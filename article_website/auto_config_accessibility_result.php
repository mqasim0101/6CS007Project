<?php
// Include the website connection file
include_once("website_connect.php");

// Define expected responses for different color vision deficiencies
$expectedResponses = array(
    'normal' => 9,
    'protanopia' => 5,
    'deuteranopia' => 8,
    'protanomalous' => 6,

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

    // Define alternative colors
    $alternative_colors = array(
        'normal' => array(
            'primary_color' => '', // Default colors
            'secondary_color' => ''
        ),
        'protanopia' => array(
            'primary_color' => '#FFC080', // Replace with a more distinguishable color for protanopia
            'secondary_color' => '#8BC34A' // Replace with a more distinguishable color for protanopia
        ),
        'deuteranopia' => array(
            'primary_color' => '#FF0000', // Replace with a more distinguishable color for deuteranopia
            'secondary_color' => '#00FF00' // Replace with a more distinguishable color for deuteranopia
        ),
        'protanomalous' => array(
            'primary_color' => '#FFFFE0', // Replace with a more distinguishable color for protanomalous
            'secondary_color' => '#8B0000' // Replace with a more distinguishable color for protanomalous
        )
        // Add more deficiency types and alternative colors as needed
    );

    // Output HTML with updated styles
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Color Blindness Test Result</title>
        <style>
            body {
                background-color: ' . $alternative_colors[$deficiency]['primary_color'] . ';
                color: ' . $alternative_colors[$deficiency]['secondary_color'] . ';
            }
        </style>
    </head>
    <body>
        <h1>Color Blindness Test Result</h1>
        <p>Based on your response, your detected color vision deficiency is: ' . $deficiency . '</p>
        <h1>Color Blindness Result</h1>
        <br><br>
        <button><a href="accessibility_test.php">Take Test Again</a></button>
        <br><br><br>
        <button><a href="accessibility_test_result.php">Email yourself a copy! </a></button>
        <br><br><br>
        <button><a href="home.php">Back to Home </a></button>
    </body>
    </html>';
    exit;
}
?>