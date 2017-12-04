$(document).ready( function() {
	let ht = $(window).height();
	let wd = $(window).width();

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
		let ndx = 0;
		let len = ($(".contents div").length)-1;

		$.get("resources/php/renderContent.php",{content: $(this).text()}).done( function(data) {
		  $(".contents").html(data);
		  $(".contents div").toggle(0);
		  $("."+String(ndx)).toggle("slow");
		  setInterval(function() {
		    $("."+String(ndx)).toggle("slow");
    		    $("."+String(ndx+1)).toggle("slow");
		    ndx++;
		      if (ndx = len) {
			ndx = 0;
		      }
		  }, 4000 );
		});
		if (wd > ht) {
		  $(".logo").css("width","15%");
		  $(".logo h1").hide();
		  $("header").css("height","25vh");
		}
	});
	

})

