<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Contact us - G&S Records</title>
	</head>

	<body>
		<img id="logo" src="images/logo3.png" />
	<ul id="nav">
		<li><a href="index.html">Home</a></li>
		<li><a href="artists.html">Artists</a></li>
		<li><a href="playlist.html">Playlists</a></li>
		<li><a href="aboutus.html">About us</a></li>
		<li><a class="active" href="contact.html">Contact us</a></li> 
	</ul>
	
	<br>
	<br>
		<?php 	$name = $_POST['name'];
					$email = $_POST['email'];
					$purpose = $_POST['purpose'];
					$message = $_POST['message'];
					$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=_312team6';
					$username = '_312team6';
					$password = 'RhavArl';
					// creates PDO object
					$db = new PDO($dsn, $username, $password);
					$query = "INSERT INTO inquiries (fullName, email, purpose, message)
					VALUES
					('$name', '$email', '$purpose', '$message')";
					$insert = $db->exec($query);
					echo "<h3> Thank you for contacting us. We will respond to your inquiry as soon as possible!</h3>"
			  ?>
	<br><br><br><br><br><br><br><br><br><br><br>
			<h2> Mailing Address </h2>
				<p class="cp"> G & S Records<br>
					1900 Commerce ST.<br>
					Tacoma, WA 98402 </p>
	<br><br><br><br><br><br>
	
	
	<center><img id="socialmedia" src="images/socialmedia.png" width="190" height="45"></center>
	<br><br><br>
	<footer>&#169 2016 G&S Records. All rights reserved.</footer>
	
	</body>
</html>