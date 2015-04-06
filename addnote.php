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

		$localnickname=htmlspecialchars($_POST["Nickname"]);
		$localtitle=htmlspecialchars($_POST["Title"]);
		$localcomment=htmlspecialchars($_POST["Comment"]);
		
		echo $localnickname;
		?><br>
		You have created a note successfully!
		<br>

		
		<?php

		include ("connect.php");

		//$sql_check = "SELECT * FROM creatanote WHERE Username = ?";

		//$result_check = $link ->prepare($sql_check);
		//$result_check -> bind_param("s",$localnickname);
		//$result_check -> execute();
		//$result = $result_check -> get_result();

		//$row_check = $result -> fetch_assoc();
		$sql = "INSERT INTO creatanote(Nickname,Title,Comment) VALUES (?,?,?)";
				$query = $link ->prepare($sql);
				$query ->bind_param("sss",$localnickname,$localtitle,$localcomment);
				$query -> execute();	
		/*$conn = new mysqli($localnickname,$localtitle,$localcomment);

		$stmt = $conn->prepare("INSERT INTO creatanote (Nickname,Title,Comment) VALUES(?,?,?)");
		$stmt->bind_param("ss",$_POST["Nickname"],$_POST["Title"],$_POST["Comment"]);

		$stmt->execute();
		*/
		//mysqli_query($con,"INSERT INTO creatanote (Nickname,Title,Comment) VALUES ('$localnickname','$localtitle','$localcomment')"); 
		?>

		<a href="home2.php" class="btn btn-danger">click here</a>
	</body>
</html>