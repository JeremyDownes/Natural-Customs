<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	<title>Natural Customs</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/reset.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../resources/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
</head>
<body>
	<header>
		<img src="../resources/images/CRITICAL/naturalcustomslogo.png">
		<h1>"A handy guy to know"</h1>
		<nav class="header-nav">
			<div class="container-fluid">
				<div class="row">
					<?php
					require "../resources/php/createDB.php";
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
					    <img src='../". $row["imageURL"]."' class ='".$class."'>  
					    <p class ='".$class."'>".$row['heading']."</p>
					    <form action='changeNavImage.php' method='post' enctype='multipart/form-data'>
					    <input type='file' name='fileToUpload' id='fileToUpload'>
					    <input type='hidden' name='section' value='".$class."'> 
					    <input type='submit' value='Change navigation image'></form></div>";

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
 					<button class="btn btn-default">Diagnostics</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Repair Services</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Performance Upgrades</button>
 				</div>
 				<div class="col-xs-3">
 					<button class="btn btn-default">Custom Fabrication</button>
 				</div>
 			</div>
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

 	</section>

	<div class="contents">
	</div>

 </div>



  <script
 		 src="https://code.jquery.com/jquery-3.1.1.min.js"
 		 integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
 		 crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="main.js"></script>
</body>
</html>