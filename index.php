<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Haukai Restaurant</title>
	<link rel="icon" type="Images" href="./Images/favicon.ico">

	<!--Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<!--header-->
	<div class="h-100 d-inline-block w-100 pt-5 pb-5 bg-dark text-light display-1">
		<h5 class="p-5 pt-0 pb-0">
			<?php include 'visitors.php';?>	
		</h5>
		<h1 class="text-center">The Haukai Restaurant</h1>
	</div>

	<!--Nav bar-->
	<nav class="p-5 pt-2 pb-2 navbar navbar-expand-lg navbar-dark bg-secondary">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<div class="navbar-nav">
      			<a class="nav-item nav-link active" href="./index.html">Home</a>
      			<a class="nav-item nav-link" href="./hours.html">Hours</a>
      			<a class="nav-item nav-link" href="./contact.html">Contact</a>
      			<a class="nav-item nav-link" href="./menu.html">Menu</a>
      			<a class="nav-item nav-link" href="./reservations.html">Reservations</a>
      			<a class="nav-item nav-link" href="./private/private.html">Staff and Roaster</a>
    		</div>
  		</div>

  		<form class="form-inline col col-lg-5 col-md-7 col-sm-12 col-xs-12" action="/action_page.php">
    		<div class="p-5 pt-0 pb-0">
    			<div class="row">
    				<div class="col col-lg-5 col-md-12 col-sm-12 col-xs-12">
    					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">		
    				</div>
    				<div class="col col-lg-5 col-md-12 col-sm-12">
      					<input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
      				</div>
      				<div class="col col-lg-2 col-md-12 col-sm-12">
      					<button type="submit" class="btn btn-dark">Login</button>	
    				</div>	
      			</div>
    		</div>
  		</form>
	</nav>

	<!-- Main Photo -->
  	<img src="Images/Picture10 -2.jpg" alt="Main Page" class="img-fluid">

  	<!--footer-->
  	<div class="p-5 bg-dark text-white text-center">
    	<h2>Privacy Statement</h2>
    	<a href="./privacystatement.html" class="link-light">Click Here</a>
  	</div>

  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>