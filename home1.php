<!DOCTYPE html>
<html lang="en">
	<head>

		<!--<link rel="stylesheet" href="main.css"/> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!--<SCRIPT SRC="src.js"></SCRIPT> --> 
		<meta charset="utf-8">
		<!--<style type="text/css">
		    div{
			  background-color:#FF0000;
			  font-size:40px;} 
		</style>
		 -->
	</head>

		

	<body>
		<!--<div> -->
			<button type="button" href="home1.php" class="btn btn-primary" >GUESTBOOK</button>
			<a href="signup.php" class="btn btn-success">Sign up</a> <a href="signin.php" class="btn btn-warning">Sign in</a>
		<!-- </div> -->
		<br>

		POSTS
		<br>
		<form>
			<div class="form-group">
					 <fieldset>

					   <?php
					 	 include("shownote1.php");
					   ?>

					 </fieldset>
	    	 </div>
		</form>
	</body>

</html>