<?php
     include("website_connect.php");
     include("navigation_bar.php");
?>
<!DOCTYPE hmtl>
<html>
	<head>
		<title>Advance Search Form</title>
		<!-- Manual style -->
		 <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<!-- Advanced Searchbar here: -->
	    <div class="search-box">
	    	<h4>Advane Search Bar Here: </h4>
	    	<p>Here is the Advance Search Box! Use this to search for two values (articles, overviews, date, director, actors) at the same time! from the website</p>
		     <form method="get" action="advance_search.php">
			      <div class="row">
				         <div class="col-md-4">
					     <label>article Name</label>
					     <input type="text" name="article_name_search" class="form-control">
				         </div>
				  <br>
				         <div class="col-md-4">
					         <label>article overview</label>
					         <input type="text" name="article_overview_search" class="form-control">
				         </div>
				  <br>
				         <div class="col-md-4">
					         <label>Click to Filter</label><br>
					         <button type="submit">Search</button>
				         </div>
				         <br><br><br>
			       </div>
		     </form>
	    </div>
	    <br><br>
	    <button><a href="navigation_bar.php">Back to Navigation Bar</a></button>
	</body>
</html>
