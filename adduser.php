<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>

		Welcome 
		<?php 
		
		//$servername = "localhost" ;
		$localuser=htmlspecialchars($_POST["Username"]);
		$localpassword=htmlspecialchars($_POST["Password"]);
		$localconfirm=htmlspecialchars($_POST["Confirm_Password"]);
		$localemail=htmlspecialchars($_POST["Email"]);
		
			

		echo $localuser; 
		?><br>
		Your email address is:
		<?php 
		echo $localemail; 
		?><br>
		We will send a mail to your email!<br>
		
		<a href="signin.php" class="btn btn-danger">click here</a>
		<?php 

	    


	    
		
			include ("connect.php");
			$sql_check = "SELECT * FROM user WHERE Username = ?";

			$result_check = $link ->prepare($sql_check);
			$result_check -> bind_param("s",$localuser);
			$result_check -> execute();
			$result = $result_check -> get_result();

			$row_check = $result -> fetch_assoc();

			if($localuser != null && $localpassword != null && $localconfirm!=null && $localpassword == $localconfirm)
			{
				$sql = "INSERT INTO user(Username,Password,Email) VALUES (?,?,?)";
				$query = $link ->prepare($sql);
				$query ->bind_param("sss",$localuser,$localpassword,$localemail);
				$query -> execute();

				echo $query->error;

			}
			/*
			$stmt = $conn->prepare("INSERT INTO user(Username,Password,Email) VALUES(?,?,?)");

			$stmt->bind_param("ss",$_POST["Username"],$_POST["Password"],$_POST["Email"]);	
			$stmt->execute();
			*/	
		//錯誤
		
		/*mysqli_query($con,"INSERT INTO user (Username, Password, Confirm_Password,Email) VALUES ('$localuser', '$localpassword', '$localconfirm','$localemail')"); */

	    
		//mysqli_select_db("my_db", $con);

		//mysqli_close($con);

		/*if (!filter_var($localemail, FILTER_VALIDATE_EMAIL)) {
	  		$emailErr = "Invalid email format"; 
	  		echo $emailErr;
			}
		*/

		?>

	</body>
</html>



