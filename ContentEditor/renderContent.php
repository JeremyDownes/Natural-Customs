<?php
  $servername = "localhost";
  $username = "NaturalCustoms";
  $password = "1life2live";
  $dbname = "NaturalCustoms";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $content = $_GET['content'];
  $items = [];
  $item = [];
  
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
    echo "
	<h1>".$list['heading']."</h1>
	<img src='../".$list['image']."'>
	<p>".$list['text']."</p>
	<form action='deleteSlide.php' method='post'>
	<input type='hidden' name='delete' value='".$list['image']."'>
	<input type='hidden' name='table' value='".$content."'>
	<input type='submit' value='Delete Slide'>
	</form>";
  }

  echo '<h1>Create new slide</h1>
<form action="../resources/php/uploadNlog.php" method="post" enctype="multipart/form-data">
Heading: <input type="text" name="heading"><br>
Select image to upload: <input type="file" name="fileToUpload" id="fileToUpload">
Paragraph: <textarea rows="4" cols="50" name="paragraph"></textarea><br>
<input type="hidden" name="content" value="'.$content.'">
<input type="submit" value="Add Slide">
</form>';

  
  $conn->close();
?>