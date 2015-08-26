<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$date = $_POST['bookingDate'];
		$location = $_POST['location'];
		$venue = $_POST['venue'];
		$comments = $_POST['comments'];
		
	    $from = 'From: ' . $email; 
	    $to = 'booking@theduppies.com'; 
	    $subject = 'Booking a DUPPIES gig!';
		$body = "From: $name\n E-Mail: $email\n Phone Number: $number\n Date: $date\n Location: $location\n Venue: $venue\n Message:\n $comments";
		
		$human = $_POST['human'];
		
		if (mail ($to, $subject, $body, $from) && $human == '4') { 
        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again! Maybe you are not human?</p>'; 
	    }
?>
<!html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
</head>

<body id="bookings">
    <header>
        <section class="col1">
            <a href="index.html"><img id="logo" src="images/logos/duppiesLogo.jpg" /></a>
        </section>

        <ul id="social">
            <li id="twitter"><a href="https://twitter.com/theduppies" target="_blank"></a></li>
            <li id="facebook"><a href="https://www.facebook.com/TheDuppies" target="_blank"></a></li>
            <li id="myspace"><a href="https://myspace.com/theduppies" target="_blank"></a></li>
            <li id="youtube"><a href="https://www.youtube.com/watch?v=Yxf20y0LVVI" target="_blank"></a></li>
        </ul>

        <ul id="navigation">
        	<li><a href="index.html">Home</a></li>
            <li><a href="http://theduppies.storenvy.com/">Shop</a></li>
            <li><a href="flyers.html">Flyers</a></li>
            <li><a href="booking.html" id="booking">Booking</a></li>
            <li><a href="members.html">Members</a></li>
        </ul>

    </header>
    <main>
        <section class="section">
        	<h3>Looking to Book a Gig?</h3>
        	<fieldset>
        		<p>Thanks, <?php echo ($name . " " . $email . " " . $number . " " . $location . " " . $venue . " " . $comments); ?> ! We'll be in touch.</p>
        	</fieldset>
        </section>

    </main>
    
    <footer>
    	<p>Made by Hooman Designs</p>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="js/datepicker.js"></script>
    
</body>
</html>

