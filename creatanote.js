$(function() {
	$("#button").on("click", function() { 
		$.ajax({
			url:"index.php",
			type: "POST",
			data: {name: $("#chat").val()},

			success: function(msg) {
				console.log(msg);
				$("#test").append("<li>"+msg+"</li>");
				}
		});
    		 });
});    		 			