$(document).ready( function() {
	$(".content section").hide();


	$(".belair").click( function() {
		$(".content section").hide();
		$(".mobile-mechanics").show();
		$(".content p").hide();
	});
	$(".c10").click( function() {
		$(".content section").hide();
		$(".home-services").show();
		$(".content p").hide();
	});
	$(".impala").click( function() {
		$(".content section").hide();
		$(".transportation").show();
		$(".content p").hide();
	});
	$(".parts").click( function() {
		$(".content section").hide();
		$(".part").show();
		$(".content p").hide();
	});

	$(".btn").click( function(){
		$.get("renderContent.php",{content: $(this).text()}, function(data) {
		$(".contents").html(data);	
		});
	});

})