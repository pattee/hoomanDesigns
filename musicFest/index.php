<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Find a Fest</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
</head>
<body>   

<!-- logo like heading-->
<div class="grid">
	<div class="col_12">
		<h1 class="center">Music Fests</h1>
		<form action="index.php" method="GET">
			<label for="location">Enter City and State: </label>
			<input id="location" type="text" name="location" />
			<input type="submit" value="Submit" />
		</form>
		<form action="index.php" method="GET">
			<label for="artist">Enter an Artist: </label>
			<input id="artist" type="text" name="artist" />
			<input type="submit" value="Submit" />
		</form>
        <!-- HR.alt1 -->
		<hr class="alt1" />
	</div>
</div> <!-- End Grid -->

<?php
include("php/displayLoc.php");
include("php/displayArtist.php");
?>

</body>
</html>
