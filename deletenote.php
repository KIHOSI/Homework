<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			include("connect.php");
			
			//parse_url ( string $url [, int $component = -1 ] )
			/*
			$url="http://localhost/shownote.php";
			parse_url ($url [ int $component = -1 ] );
            */
			$userid = $_GET["id"];
	
			$sql = "DELETE FROM creatanote WHERE ID='$userid'";
			$result = mysqli_query($link,$sql);
			if(!$result) die ("Fail!!!");

			else  
			{
				echo "Delete successfully!<br>";		
			}			

			/*while(list($localid,$localnickname,$localtitle,$localcomment)
					=mysqli_fetch_row($result))
				{

					echo "hello";

				}	*/
			
		?>	

		<a href="home2.php" class="btn btn-danger">Click here</a>

	</body>
</html>