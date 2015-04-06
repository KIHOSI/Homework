	$("#set").click(function(){
		$("#loding").fadeIn();
		$.post("creatanote.php",
			{Nickname:$("#Nickname").val(),
			Title:$("#Title").val(),
			Comment:$("#Comment").val()}),
		  

			$.ajax({
				url:"creatanote.php",
				type:"POST",
				datatype:"text",

				success:function(msg){
						console.log(msg);
					$("#Nickname").val("");
					$("#Title").val("");
					$("#Comment").val("");
					$("#start").after(
						/*"<div class='container' style='display:none;' post_id='"+
						msg.post["id"]+"'>*/
						"<div class='panel-heading'>"+
						msg.post["Nickname"]+"</div><div class='panel-body'>"+
						msg.post["Title"]+"</div><div class='panel-body'>"+
						msg.post["Commnet"]+"</div>+</div>");
					//$("[post_id="+data.post["id"]+"]").fadeToggle(1500);
					$("#loding").delay(1000).fadeOut("2000");
					}
				});
			});
			/*
			function(data,status){
				console.log(data);
				if(status == "success"){
					console.log(data);
					$("#Nickname").val("");
					$("#Title").val("");
					$("#Comment").val("");
					$("#start").after(
						"<div class='container' style='display:none;' post_id='"+
						data.post["id"]+"'><div class='panel-heading'>"+
						data.post["Nickname"]+"</div><div class='panel-body'>"+
						data.post["Title"]+"</div><div class='panel-body'>"+
						data.post["Commnet"]+"</div>+</div>");
					$("[post_id="+data.post["id"]+"]").fadeToggle(1500);
					$("#loding").delay(1000).fadeOut("2000");
					}
				}
				);
				
			*/
		
//	});






/*ajax基本
$(function() {
	$("#button").on("click", function() { 
		$.ajax({
			url:"shownote.php",
			type: "POST",
			data: {name: $("#chat").val()},

			success: function(msg) {
				console.log(msg);
				$("#test").append("<li>"+msg+"</li>");
				}
		});
    		 });
});
*/    		 			
/*
$.ajax({
	url:"shownote.php",
	type:"POST",
	datatype:"text",

	success:function(msg){
		console(msg);
	}
});
*/