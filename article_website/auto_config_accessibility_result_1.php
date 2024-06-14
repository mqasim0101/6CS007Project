<?php
// Include the website connection file
include_once("website_connect.php");

// Define expected responses for different color vision deficiencies
$expectedResponses = array(
    'normal' => 9,
    'protanopia_severe' => 8,
    'protanopia_mild' => 7,
    'protanopia_moderate' => 2,
    'deuteranopia_mild' => 3,
    'deuteranopia_moderate' => 5,
    'deuteranopia_severe' => 5
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
        'protanopia_mild' => array(
            'primary_color' => '#FFA500', // Replace with a more distinguishable color for protanopia mild
            'secondary_color' => '#FF8C00' // Replace with a more distinguishable color for protanopia mild
        ),
        'protanopia_moderate' => array(
            'primary_color' => '#FFC0CB', // Replace with a more distinguishable color for protanopia moderate
            'secondary_color' => '#FF69B4' // Replace with a more distinguishable color for protanopia moderate
        ),
        'protanopia_severe' => array(
            'primary_color' => '#EE82EE', // Replace with a more distinguishable color for protanopia severe
            'secondary_color' => '#DA70D6' // Replace with a more distinguishable color for protanopia severe
        ),
        'deuteranopia_mild' => array(
            'primary_color' => '#000033', // Replace with a more distinguishable color for deuteranopia mild
            'secondary_color' => '#8B0000' // Replace with a more distinguishable color for deuteranopia mild
        ),
        'deuteranopia_moderate' => array(
            'primary_color' => '#000080', // Replace with a more distinguishable color for deuteranopia moderate
            'secondary_color' => '#800000' // Replace with a more distinguishable color for deuteranopia moderate
        ),
        'deuteranopia_severe' => array(
            'primary_color' => '#0000FF', // Replace with a more distinguishable color for deuteranopia severe
            'secondary_color' => '#8B0000' // Replace with a more distinguishable color for deuteranopia severe
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