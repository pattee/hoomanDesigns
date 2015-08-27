<?php
require_once("php/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Full Fest List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
</head>
<body>
<!-- Menu Horizontal -->
    <ul class="menu">
        <li><a href=""> Genre</a>
            <ul>
                <li><a href=""> Dance</a></li>
                <li><a href=""> Dubstep</a></li>
                <li><a href=""> Electronic</a></li>
            </ul>
        </li>
        <li><a href="">Location</a>
            <ul>
                <li><a href=""> New York</a></li>
                <li><a href=""> Chicago</a></li>
            	<li><a href=""> L.A.</a></li>
            </ul>
        </li>
        <li><a href="">Month</a>
            <ul>
            <li><a href=""> January</a></li>
            <li><a href=""> February</a></li>
            <li><a href=""> March</a></li>
            <li><a href=""> March</a></li>
            <li><a href=""> April</a></li>
            <li><a href=""> May</a></li>
            <li><a href=""> June</a></li>
            <li><a href=""> July</a></li>
            <li><a href=""> August</a></li>
            <li><a href=""> September</a></li>
            <li><a href=""> October</a></li>
            <li><a href=""> November</a></li>
            <li><a href=""> December</a></li>
            </ul>
        </li>
    </ul>
    


<!-- logo like heading-->
<div class="grid">
	<div class="col_12">
		<h1 class="center">Music Fests</h1>
        <!-- HR.alt1 -->
		<hr class="alt1" />
	</div>
</div> <!-- End Grid -->

<div class="grid">
	<div class="col_12 center">
		<a href="index.php">Home</a>
        <a href="festList.php">Upcoming Fests</a>
        <!-- HR.alt1 -->
		<hr class="alt1" />
	</div>
</div> <!-- End Grid -->

<div class="grid">
	<div class="col_8">
		<div class="col_12">
        	<div class="col_8">
        	<h4><?php echo ($row[0]) ?></h4><p>Owensboro, KY</p><p>June 25-28, 2014</p>
            </div>
            <div class="col_4">
            	<img src="images/ROMP_Logo.png" width="200" height="100" />
            </div>
        <!-- HR.alt1 -->
		<hr class="alt1" />
        </div>
        <div class="col_12">
        	<div class="col_8">
        	<h4>ROMP Fest 2014</h4><p>Owensboro, KY</p><p>June 25-28, 2014</p>
            </div>
            <div class="col_4">
            	<img src="images/ROMP_Logo.png" width="200" height="100" />
            </div>
        <!-- HR.alt1 -->
		<hr class="alt1" />
        </div>
        <div class="col_12">
        	<div class="col_8">
        	<h4>ROMP Fest 2014</h4><p>Owensboro, KY</p><p>June 25-28, 2014</p>
            </div>
            <div class="col_4">
            	<img src="images/ROMP_Logo.png" width="200" height="100" />
            </div>
        <!-- HR.alt1 -->
		<hr class="alt1" />
        </div>
        <div class="col_12">
        	<div class="col_8">
        	<h4>ROMP Fest 2014</h4><p>Owensboro, KY</p><p>June 25-28, 2014</p>
            </div>
            <div class="col_4">
            	<img src="images/ROMP_Logo.png" width="200" height="100" />
            </div>
        <!-- HR.alt1 -->
		<hr class="alt1" />
        </div>
        <div class="col_12">
        	<div class="col_8">
        	<h4>ROMP Fest 2014</h4><p>Owensboro, KY</p><p>June 25-28, 2014</p>
            </div>
            <div class="col_4">
            	<img src="images/ROMP_Logo.png" width="200" height="100" />
            </div>
        <!-- HR.alt1 -->
		<hr class="alt1" />
        </div>
        <div class="col_12">
        	<div class="col_8">
        	<h4>ROMP Fest 2014</h4><p>Owensboro, KY</p><p>June 25-28, 2014</p>
            </div>
            <div class="col_4">
            	<img src="images/ROMP_Logo.png" width="200" height="100" />
            </div>
        <!-- HR.alt1 -->
		<hr class="alt1" />
        </div>
	</div>
</div>

<div class="grid">
	<div class="col_4 borderGray">
    	<div class="col_12 center">
			<img src="images/festival.jpg" width="182" height="121" />
        </div>
        <div class="col_12 center">
        <h6>Choose A Location to Search:</h6>
        <!-- Select -->
		<label for="select1">Select Location</label>
        <select id="select1">
        <option value="0">-- Choose --</option>
        <option value="1">Delaware</option>
        <option value="2">Montana</option>
        <option value="3">Idaho</option>
        </select>
        </div>
        <div class="col_12 center">
        <h6>Choose A Fest By Genre:</h6>
        <!-- Select -->
		<label for="select1">Select Location</label>
        <select id="select1">
        <option value="0">-- Choose --</option>
        <option value="1">Punk</option>
        <option value="2">Hip Hop</option>
        <option value="3">IDM</option>
        </select>
        </div>
        <div class="col_12 center">
        <h6>Contact Us</h6>
        	<a href="mailto:me@google.com">musicfest@gmail.com</a>
        </div>
	</div>
</div>

</body>
</html>
