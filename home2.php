<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<!--<style type="text/css">
		    div{
			  background-color:#FF0000;
			  font-size:40px;}
		</style>
		顯示紅色-->
	</head>

<body>

	<div>
		<button type="button" href="home2.php" class="btn btn-primary">GUESTBOOK</button>
		<?php
			session_start(); 
			echo "Hello!".$_SESSION['Username'] ;
		?>
		<a href="creatanote.php" class="btn btn-info">New Post</a> <a href="logout.php" class="btn btn-warning">Logout</a>
	</div>
	<br>

	POSTS
	<form>
	 <fieldset>
	    
	    <?php
		include("shownote2.php");	
		?>


	 </fieldset>
	</form>
</body>

</html>

