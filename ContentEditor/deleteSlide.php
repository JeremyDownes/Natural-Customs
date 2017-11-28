<?php
  $servername = "localhost";
  $username = "NaturalCustoms";
  $password = "1life2live";
  $dbname = "NaturalCustoms";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $img2del = $_POST['delete'];
  $table = $_POST['table'];
  if(!$conn->query("DELETE FROM ".$table." WHERE imageURL='".$img2del."'")) {echo $conn->error;}
  $conn->close();
  unlink("../".$img2del);
  header("Location: index.php");
?>