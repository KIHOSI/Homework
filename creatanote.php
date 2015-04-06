<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
	</head>

	<body>
		<!--<h1>Creat A Note!</h1>-->
		

		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">New Post</div>
					<div class="panel-body">
							<form class="panel-horizontal">
								<div class="form-group">

									<label for="Nickname" class="col-sm-1">Nickname</label>
									<div class="col-sm-10">
										<input class="form-control" type="text" name="Nickname" id="Nickname" placeholder="Nickname*" required>
									</div>
								</div>

								<div class="form-group">
									<label for="Nickname" class="col-sm-1">Title</label>									
									<div class="col-sm-10">
										<input class="form-control" type="text" name="Title" id="Title" placeholder="Title*" required>
									</div>
								</div>

								<div class="form-group">	
									<label for="Nickname" class="col-sm-1">Comment</label>
									<div>
									<textarea class="form-control" rows="4" cols="50" name="Comment" id="Comment" placeholder="Leave Some Words!*" required>

									</textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-1 col-sm-10">
										<button type="button" class="btn btn-warning" id="set">
											<span id="loding" class="glyphicon glyphicon-refresh glyphicon-refresh-animate" style="display: none;"></span>
											Submit
										</button>
									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>

		<script src="jquery/pack/jquery-2.1.3.min.js"></script>
		<script src="creatanote.js"></script>
    
    	<?php
    		$localnickname=$_POST["Nickname"];
    		$localtitle=$_POST["Title"];
    		$localcomment=$_POST["Comment"];

		?>
    		{
    		"Nickname" : "$localnickname",
    		"Title" : "$localtitleo",
    		"Comment" :"$localcomment"
    		}
    	
    
	</body>



</html>