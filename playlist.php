<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Playlists - G&S Records</title>
	</head>

	<body>
		<img id="logo" src="images/logo3.png" />
	<ul id="nav">
		<li><a href="index.html">Home</a></li>
		<li><a href="artists.html">Artists</a></li>
		<li><a class="active" href="playlist.html">Playlists</a></li>
		<li><a href="aboutus.html">About us</a></li>
		<li><a href="contact.html">Contact us</a></li> 
	</ul>

	<h1 id="playListHeading">Playlists</h1>
	
	<p>Listen to your favorite artists, discover new music, or find the perfect soundtrack for your next party with curated playlists from our artists and staff.</p>
	<br>
	<br>
	
	<table style="width:100%">
			<tr>
				<td id="ID2"><a href="playlists/billboard.html"><img src="images/Billboard.jpg" height="200" width="200" /></a>
				<br><a href="playlists/billboard.html">Billboard Top Songs 2016</a></td>
				<td id="ID2"><a href="playlists/rock.html"><img src="images/keep-calm-and-listen-rock-music-6.png" height="200" width="200" /></a><br>
				<a href="playlists/rock.html">Top Tracks - Rock Music</a></td>
				<td id="ID2"><a href="playlists/hiphop.html"><img src="images/hiphop.png" height="200" width="200" /></a>
					<br><a href="playlists/hiphop.html">Top Tracks - Hip Hop Music</a></td>
			</tr>
		</table>
		
		<br><br><br><br><br>
		
				<?php $first_name = $_POST['first_name'];
						$comment = $_POST['comment'];
						$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=_312team6';
						$username = '_312team6';
						$password = 'RhavArl';
						// creates PDO object
						$db = new PDO($dsn, $username, $password);
						$query = "INSERT INTO comments
						VALUES
						('$first_name', '$comment')";
						$insert_count = $db->exec($query);
				  ?>
		
		
		<table id="commentTable">
		<?php
			$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=_312team6';
			$username = '_312team6';
			$password = 'RhavArl';
			// creates PDO object
			$db = new PDO($dsn, $username, $password);
			$comments = $db->query('SELECT * FROM comments');
			foreach ($comments as $comment) {
				echo "<tr id='commentStyle'><td>". $comment['first_name'] . ": " . "</td>";
				echo "<td>" . $comment['comment'] . "</td></tr>";
			}
		?>
		</table>
		
	
	<br><br><br><br>
	
	<form name="comment_form" method="post" action="playlist.php">
		<input name="first_name" id="first_name" placeholder="First Name: " type="text" required> <br>
		<textarea name="comment" id="comment" placeholder="Your comment here:" rows="5" cols="20"></textarea>
		</br>
		<input value="Submit" type="submit" >
	</form>
	<br>
	<br>
	
	<center><img id="socialmedia" src="images/socialmedia.png" width="190" height="45"></center>
	<br><br><br>
	<footer>&#169 2016 G&S Records. All rights reserved.</footer>
	
	<body>
</html>

	
