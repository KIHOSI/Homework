<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" language="JavaScript">
			function checkEmail(remail) 
			{
				if (remail.search(/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/)!=-1)
				{
				   alert("Email Correct！");
				} 
				else 
				{
				  alert("Email Error, Input again！");
				  document.myForm.email.focus();
				}
			}
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	</head>
	<body>
		
		
		<form action="actionlogin.php" method="post">
			<fieldset>
				<legend>Sign in</legend>
				Username:<br>
				<input type="text" name="loginUsername" placeholder="Username*" required><br>
				Password:<br>
				<input type="password" name="loginPassword" placeholder="Password*" required><br>
				<button type="submit" value="Submit" class="btn btn-warning">Submit</button><br>
				<a href="home1.php">Forget your password?</a><br>
				<a href="signup.php">Creat your account</a><br>
			</fieldset>
		</form>

		

	</body>
</html>