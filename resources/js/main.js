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


	$("button").click( function(){
		switch ($(this).text()) {
			case "Kitchen":
				$(".content p").hide();
				$(".kitchen").show();
				break;
			case "Bath":
				$(".content p").hide();
				$(".bath").show();
				break;
			case "Interior":
				$(".content p").hide();
				$(".interior").show();
				break;
			case "Exterior":
				$(".content p").hide();
				$(".exterior").show();
				break;
			case "Diagnosis":
				$(".content p").hide();
				$(".diagnosis").show();
				break;			
			case "Repair Service":
				$(".content p").hide();
				$(".repair").show();
				break;					
			case "Performance Upgrades":
				$(".content p").hide();
				$(".performance").show();
				break;
			case "Custom Fabrication":
				$(".content p").hide();
				$(".fabrication").show();
				break;
			case "Classic Uber":
				$(".content p").hide();
				$(".uber").show();
				break;	
			case "Repair Concierge":
				$(".content p").hide();
				$(".concierge").show();
				break;	
			case "Limo Service":
				$(".content p").hide();
				$(".limo").show();
				break;	
			case "Performance":
				$(".content p").hide();
				$(".performance").show();
				break;	
			case "Parts Store":
				$(".content p").hide();
				$(".store").show();
				break;	
			case "Completion Calculator":
				$(".content p").hide();
				$(".calculator").show();
				break;							
		}
	});

})