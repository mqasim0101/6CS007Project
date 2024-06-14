<?php
session_start();
     include("website_connect.php");
     include("navigation_bar.php");
?>
<!Doctype html!>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<title>Home</title>
</head>
<body>
	<!-- Main code Displayed here: -->
	<h1>Welcome to Article Website </h1>
	<p>Welcome to the paragraph</p>
	<button><a href="display_articles.php">View Articles</a></button>
	<br><br>
	<button><a href="search_form.php">Click here to Access Search Bar</a></button>
	<br><br>
	<button><a href="advance_search_form.php">Click here to Access Advanced Search Bar</a></button>
	<br><br><br><br><br><br><br><br><br>
	<img>
	<br>
	<p><i>This article talks about </i></p>
</body>
</html>