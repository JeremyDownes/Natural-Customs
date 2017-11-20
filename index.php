<!DOCTYPE html>
<html>
<head>
	<title>Natural Customs</title>
	<link rel="stylesheet" type="text/css" href="./resources/css/reset.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./resources/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
</head>
<body>
	<header>
		<img src="resources/images/CRITICAL/naturalcustomslogo.png">
		<h1>"A handy guy to know"</h1>
		<nav class="header-nav">
			<div class="container-fluid">
				<div class="row">
					<?php
					require "resources/php/createDB.php";
					$servername = "localhost";
					$username = "NaturalCustoms";
					$password = "1life2live";
					$dbname = "NaturalCustoms";
					$conn = new mysqli($servername, $username, $password, $dbname);
					$tableData = $conn->query("SELECT heading, imageURL FROM navigation");
					if ($tableData->num_rows >= 0) {
					    // output data of each row
					    while($row = $tableData->fetch_assoc()) {
					    $class = str_ireplace("images/","",$row["imageURL"]);
					    $class = basename($class,".jpg");
				            echo "<div class='col-xs-3'>		
					    <img src='". $row["imageURL"]."' class ='".$class."'>
					    <p>".$row['heading']."</p></div>";

					    } 
					}
					?>
				</div>
			</div>
	</header>

	<div class="content">

 	<section class="mobile-mechanics">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-xs-3">
 					<button class="btn btn-default">Diagnosis</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Repair Service</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Performance Upgrades</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Custom Fabrication</button>
 				</div>
 			</div>
 		</div>
 		<div class="content">
   		<p class="diagnosis">We offer the best in leading diagnostic services and technologies to ensure that your repairs are whatever</p>
   		<p class="repair">Our master mechanics have years of experience performing all types of repairs to all makes and models. We use only high quality parts to ensure durability beyond the life of the warantee.</p>
   		<p class="performance">We offer a wide range of performance upgrade services to tweak that extra horsepower out of your high performance ride. (list of stuff)</p>
   		<p class="fabrication">In addition to our other services we also offer custom fabrications in metal, fiberglass, and wood as well as paint and body</p>
   	</div>
 	</section>

 	<section class="home-services">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-xs-3">
 					<button class="btn btn-default">Kitchen</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Bath</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Interior</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Exterior</button>
 				</div>
 			</div>
 		</div>
 		<div class="content">
   		<p class="kitchen">We are your full service kitchen remodeling professionals. We offer custom built kitchen cabinets in a variety of high quality materials and finishes. Countertop to floors, backsplahes and lighting we do it all including the plumbing.</p>
   		<p class="bath">We offer all types of bathroom repair and remodelling services from fixing a leaky faucet to tiling your shower and everything in between.</p>
 	  	<p class="interior">We offer flooring drywall framing and floorplan changes to simply painting your walls</p>
 	  	<p class="exterior">We offer a variety of exterior services including paving landscaping and exterior paint</p>
 	  </div>
 	</section>

 	<section class="transportation">
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-4">
 					<button class="btn btn-default">Classic Uber</button>
 				</div>
 				<div class="col-xs-4">
 					<button class="btn btn-default">Repair Concierge</button>
 				</div>
 				<div class="col-xs-4">
 					<button class="btn btn-default">Limo Service</button>
 				</div>
 			</div>
 		</div>
 		<div class="content">
   		<p class="uber">We'll haul your ass in style!</p>
   		<p class="concierge">Door to door pickup and delivery services available for customers of our service department</p>
 	  	<p class="limo">Our classy classics are available by the hour with our full service limosine offering</p>
 	  </div>
 	</section>

 	<section class="part">
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-4">
 					<button class="btn btn-default">Performance</button>
 				</div>
 				<div class="col-xs-4">
 					<button class="btn btn-default">Parts Store</button>
 				</div>
 				<div class="col-xs-4">
 					<button class="btn btn-default">Completion Calculator</button>
 				</div>
 			</div>
 		</div>
 		<div class="content">
   		<p class="performance">
   			<br/> Intake
   			<br/> Exhaust
   			<br/> Engine
   			<br> Suspension
   		</p>
   		<p class="store">Ecommerce section</p>
 	  	<p class="calculator">add it up it === $$$ !!!</p>
 	  </div>
 	</section>

 </div>



  <script
 		 src="https://code.jquery.com/jquery-3.1.1.min.js"
 		 integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
 		 crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="resources/js/main.js"></script>
</body>
</html>