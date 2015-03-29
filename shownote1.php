<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
		
	<body>
			<?php 
				include ("connect2.php");
				$sql = "SELECT * FROM creatanote";
				$result = mysqli_query($con,$sql);
				
				while(list($localid,$localnickname,$localtitle,$localcomment)
					=mysqli_fetch_row($result))
				{
					echo "<div class='container'>";
				/*	echo "<form action='delectnote.php' method='post'>"; */ 
					echo "<Table class='table'>";
					echo "<thead>";
					echo "<tr class='info'>";
					echo "<th>Nickname</th>";
					echo "<th>Title</th>";
					echo "<th>Comment</th>";
					echo "</tr>";
					echo "</thead>";

					echo "<tbody>";
					echo "<tr>";
					echo "<td>".$localnickname."</td>";
					echo "<td>".$localtitle."</td>";
					echo "<td>".$localcomment."</td>"; 
					echo "</tr>";
			?>

				<!--	<a class="btn btn-primary btn-lg active" role="button" href="deletenote.php?id=<?=$localid?>">Delete</a>
			   	-->	
			   

			<?php		
				/*	echo "<br> <input type='submit' value='Delect'>"; */
					echo "</tbody>";
				/*	echo "</form>";  */
					echo "</table>";  
					echo "</div>";
					echo "<br>";
			    



				}		
			?>
			
		
		
	</body>
</html>