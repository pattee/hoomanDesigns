<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$from = 'From: ' . $email;
	$to = 'amandorka@gmail.com';
	$subject = 'contacting from your one crafty historian website';
	$body = "From: $firstName $lastName\n Email: $email\n Message: $message";
		
	$human = $_POST['human'];
	
	if(mail ($to, $subject, $body, $from) && $human === '5') {
		$img = "successfulFox";
		$success = "Your message has been successfully sent. If you have managed to be interesting you will receive a reply.";
	} else {
		$img = "failureFox";
		$success = "You might have left something blank, go back and try again.";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>One Crafty Historian</title>
  <meta name="description" content="Contact One Crafty Historian">
  <meta name="author" content="Amanda Allard Cline">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Backup google font -->
  <link href='http://fonts.googleapis.com/css?family=Kreon:400,700' rel='stylesheet' type='text/css'> 
  <link href='http://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/mainstyle.css">
  <link rel="stylesheet" href="css/color.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/svg" href="images/logo-simple-small.svg">

</head>
<body>
<span id="top">&nbsp;</span>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
	  <div class="row" id="header">
	    <a href="index.html">
	    <div class="seven columns" id="amanda">
	    	<img src="images/logowebsite.gif" width="225" id="logo">
	    	<img src="images/facebook.gif" id="facebook" width="175">
	    	<img src="images/twitter.gif" id="twitter" width="175">
	    	<img src="images/pinterest.gif" id="pinterest" width="175">
	    	<table>
	    	<tr>
	    		<td><h1>one</h1></td>
	    		<td><h1>crafty</h1></td>
	    		<td><h1>historian</h1></td>
	    	</tr>
	    	<tr><td><h2>amanda</h2></td>
	    		<td><h2>allard</h2></td>
	    		<td><h2>cline</h2></td>
	    	</tr>
	    	</table>
	    </div>
	    </a>
	    <div class="five columns" id="navigation">
	    	<ul class="u-pull-right">
	    		<li><a href="index.html">work</a></li>
	    		<li><a href="about.html">about</a></li>
	    		<li><a href="contact.html">contact</a></li>
	    	</ul>
		</div>
	  </div>
	  
	  <hr>
  	
	  <div class="row">
	    <div class="twelve columns">
	      <img src="images/<?php echo($img) ?>.jpg">
	      <h6><? echo($success); ?></h6>
	    </div>
	  </div>
	    
	  
	  <hr>
	    
	  <div class="row" id="footer">
		    <div class="six columns">
		    	<a href="http://www.patteegreen.com" target="_blank">crafted by Hooman Designs</a>
		    </div>
		    <div class="six columns">
		    	<a href="index.html">one crafty historian &copy; 2015</a>
		    </div>
	  </div>
	  
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->