<?php
     include("website_connect.php");
     include("navigation_bar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Color Blindness Test</title>
    <link rel="stylesheet" type="text/css" href="alternative_colors.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="auto_config_accessibility_result.js"></script>
</head>
<body>
    <h1>Color Blindness Test</h1>
    <form id= "form21" action="auto_config_accessibility_result_1.php" method="get">
        <img src="Test 1.png" alt="Colour Blindness Test">
        <br><br>
        <label id="label1" for="response">Select the number you see:</label>
        <br>
        <select name="response" id="response">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <button type="submit" name="submit3" id="button3">Get Result</button>
        <br><br>
        <button type="submit" name="submit1" id="button1">Nothing</button>
        <br><br>
        <button type="submit" name="submit2" id="button2">Not Sure</button>
    </form>
</body>
</html>