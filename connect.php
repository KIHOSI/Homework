<?php
	//session_start();

	$db_server = "localhost";
	$db_user = "root";
	$db_name = "mailbox";
	$db_password = "";

	$link = new mysqli($db_server,$db_user,$db_password,$db_name);
	if(!$link)
	{
		echo "資料庫連結錯誤代碼:".mysqli_connect_errno()."<br>";
		echo "資料庫連結錯誤訊息:".mysqli_connect_error()."<br>";
		exit();
	}

	/*
	$con = mysqli_connect("localhost",'root','',"mailbox");
	if(!$con)
		echo "fail";
	*/
	/*$servername = "localhost" ;
	$localuser=$_POST["Username"];
	$localpassword=$_POST["Password"];
	$localconfirm=$_POST["Confirm_Password"];
	$localemail=$_POST["Email"];
	*/	
	//$conn = new mysqli($servername,$localuser,$localpassword,$localemail );
	/*else
		echo "success";*/
		
	
?>