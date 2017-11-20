<?php
$servername = "localhost";
$username = "NaturalCustoms";
$password = "1life2live";
$dbname = "NaturalCustoms";

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->query("DROP DATABASE ".$dbname);
header("Location: build.php");
?>