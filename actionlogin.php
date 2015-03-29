<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
		<?php

		    session_start(); 
		    

			include ("connect.php");
			$sql_check = "SELECT * FROM user WHERE Username = ?";

			$result_check = $link ->prepare($sql_check);
			$result_check -> bind_param("s",$localuser);
			$result_check -> execute();
			$result = $result_check -> get_result();

			$row_check = $result -> fetch_assoc();
			

			if(isset($_POST["loginUsername"]) and isset($_POST["loginPassword"]))
			{
				$loginuser = $_POST["loginUsername"];
				$loginpass = $_POST["loginPassword"];

				$sql = "SELECT Username,Password FROM user WHERE Username=?";
				
				//$sql = "INSERT INTO user(Username,Password) VALUES (?,?)";
				$query2 = $link ->prepare($sql);
				$query2 ->bind_param("ss",$loginuser,$loginpass);
				$query2 -> execute();
				$get_result = $query2 -> get_result();
				$row = $get_result ->fetch_assoc();
				$check = $row['Username'];



				//$result = mysqli_query($link,$query1);
				/*$test = mysqli_fetch_row($result);
				echo $test;
				var_dump($test); */
				//$row = @mysql_fetch_row($result);
				
				//$check -> mysqli_num_rows($query2);	

				if($check==0)
				{
					echo "fail!";
					echo "<br>Please try again!<br>";
					echo "<a href='signin.php' class='btn btn-danger'>Click here</a>";
				}
				else
				{
					while(list($localuser,$localpass)
						=mysqli_fetch_row($result))
					{

						
						if(($localuser == $loginuser )&&($localpass == $loginpass))
						{ 
							$_SESSION["Username"] = $loginuser;
							echo "success!<br>";

							//$username = $_SESSION["Username"];
							echo " Welcome to back!<br>";
							echo $_SESSION["Username"]."<br>"; 
							echo "<a href='home2.php' class='btn btn-danger'>click here</a>";
							

						/*$_SESSION["name"]=$_POST["loginUsername"];*/
						/*$_SESSION['name']->$_SESSION['loginuser']; */

						//$localname = $_POST["loginUsername"];
						}
						
					else
					{
						echo "fail!";
						echo "<br>Please try again!<br>";
						echo "<a href='signin.php' class='btn btn-danger'>Click here</a>";
					}
					
				//}
					}	
				}
			}	
			//($loginuser!=" " )&& ($loginpass !=" " )&& 


		?>



		
		  

	</body>
</html>