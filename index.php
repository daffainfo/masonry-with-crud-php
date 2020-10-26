<?php
	session_start();

	include 'config.php';

	$sql = "SELECT * FROM list_url";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Info Webinar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Info - info webinar terupdate" />
	<meta name="author" content="Muhammad Daffa" />

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/salvattore.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a class="navbar-brand" href="index.html">Info Webinar</a>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
        	<div id="fh5co-board" data-columns>
        		<?php  
			    while($row = mysqli_fetch_array($result)) {         
			        echo '<div class="item">';
			        echo '<div class="animate-box">';
			        echo "<a href=".$row['link']." class='image-popup fh5co-board-img' title='".$row['judul']."'>";
			        echo "<img src='".$row['link']."' alt='".$row['deskripsi']."'>";
			        echo "</a>";
			        echo "</div>";
			        echo "<div class='fh5co-desc'>".$row['deskripsi']."</div>";
			        echo "</div>";
    			}
    		?>
        	</div>
        	</div>
       </div>
	</div>

	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p><small>&copy; Hydrogen Template.</small></p>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/salvattore.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
