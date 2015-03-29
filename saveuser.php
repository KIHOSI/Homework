<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="jquery.js" ></script>
		<script>
         var Submit=function(){
            var URLs="signup.php";
           
            $.ajax({
                url: URLs,
                data: $('#myForm').serialize(),
                type:"POST",
                dataType:'json',

                success: function(msg){
                    alert(msg);
                },

                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                 }
            });
            
        }
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php
		
		$localuser=$_POST["Username"];
		$localpassword=$_POST["Password"];
		$localconfirm=$_POST["Confirm_Password"];
		$localemail=$_POST["Email"];

		echo "Sign up successfully!<br>";
		echo "welcome to join us!";
		echo $localuser; 
		echo "<br>Your email address is:".$localemail;
		echo "<br>We will send a email to you!<br>";


		?>

		<a href="home2.php" class="btn btn-danger">click here</a>

		<?php
		
			include ("connect.php");
			mysqli_query($con,"INSERT INTO user (Username, Password,Email) VALUES ('$localuser', '$localpassword','$localemail')"); 
		?>
	</body>
</html>