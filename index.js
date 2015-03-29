//index.js
$(function() {	//jquery

  $("#button").on("click", function() {  //once id:button clicked, do ~~      //#: put html id name behind
   
	$.ajax({	//ajax
		url:"index.php", //including index.php!!!
		type: "POST",
		data: {name: $("#chat").val()},   //inside {} is jquery.  val:   //name: is the thing that will be saved in POST

		success: function(msg) {
		console.log(msg); 	//js, save data
		$("#test").append("<li>"+msg+"</li>");  //append: add in the back
     		 }
	});
     });	
});