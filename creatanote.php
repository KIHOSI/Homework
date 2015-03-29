<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<h1>Creat A Note!</h1>

		<form action="addnote.php" method="post" id="mynote">
			<fieldset>
				Nickname:
				<br>
				<input type="text" name="Nickname" placeholder="Nickname*" required>
				<br>
				Title:
				<br>
				<input type="text" name="Title" placeholder="Title*" required>
				<br>
				Comment:<br>
				<textarea rows="4" cols="50" name="Comment" placeholder="Leave Some Words!*" required>

				</textarea>
				<br>
				<button type="submit" value="Submit" class="btn btn-warning" id="set">Submit</button>
			</fieldset>
		</form>
		
		<script src="jquery/pack/jquery-2.1.3.min.js"></script>
		<script src="creatanote.js"></script>
	</body>

</html>