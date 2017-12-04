<?php
  $servername = "localhost";
  $username = "NaturalCustoms";
  $password = "1life2live";
  $dbname = "NaturalCustoms";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $content = $_GET['content'];
  $items = [];
  $item = [];
  $index = 0;

  $results = $conn->query("SELECT * FROM ".$content);
  if ($results->num_rows > 0) {
    // output data of each row
    while($row = $results->fetch_assoc()) {
        $item['heading']=$row["heading"];
	$item['image']=$row["imageURL"];
	$item['text']=$row["textContent"];
	array_push($items,$item);
    }
  } else { echo "No Content"; }

  foreach($items as $list) {
    echo "<div class='".$index."'>";
    if ($list['heading']) {
	echo "<h1>".$list['heading']."</h1>";
    }
    echo "<img src='".$list['image']."'>
	<p>".$list['text']."</p>
	</div>";
	$index++;
  }
  $conn->close();
?>