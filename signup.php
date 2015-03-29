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

	<form action="adduser.php" method="post" name="myForm" >  <!--onsubmit="return verify(this.Password, this.Confirm_Password)">  測試-->
		<fieldset>
			<legend>Sign Up</legend>
			Username:<br>
			<input type="text" name="Username" placeholder="Username*" required><br>
			Password:<br>
			<input type="password" name="Password" placeholder="Password*" id="input1" required><br>
			Confirm Password:<br>
			<input type="password" name="Confirm_Password" placeholder="Confirm Password*" id="input2" required><br>
			Email:<br>
			<input type="email" name="Email" placeholder="Email*"><br>
			<button type="Submit" value="Submit" onclick="check()" class="btn btn-warning">Submit</button>
		</fieldset>
	</form>
	

	<!--onblur="checkEmail(document.myForm.Email.value);"  保留 信箱-->
	<!--onclick="check()" 保留 密碼-->


<script>
function check()
{ 
with(document.all){
if(input1.value!=input2.value)
{
alert("false")
input1.value = "";
input2.value = "";
}
//else document.forms[0].submit();
}
}

</script>


<!--
<SCRIPT. LANGUAGE=javascript. RUNAT=Server>
function isEmail(Email) {
if (Email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
return true;
else
alert("oh");
}
</SCRIPT>
-->

<!--
<script>
console.log(callback)
>>[checkEmail]
</script>
-->

</body>
</html>