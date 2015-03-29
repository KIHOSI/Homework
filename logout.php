<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php
			session_start(); 
			/*$test = $_SESSION["Username"];
			var_dump($test);*/
			//echo $_SESSION['Username'];
			unset($_SESSION['Username']);
			/*$_SESSION = array();
			if (isset($_COOKIE[session_name()]))
				{
					setcookie(session_name(), '', time()-42000, '/');
				}
			*/	
			session_destroy();
			//echo $_SESSION['Username'];
			//var_dump($test);
		?>
		Log out successfully!
		<br>
		<a href="home1.php" class="btn btn-success">click here</a>
	</body>
</html>