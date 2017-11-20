<?php
$servername = "localhost";
$username = "NaturalCustoms";
$password = "1life2live";
$dbname = "NaturalCustoms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$conn->query("TRUNCATE TABLE navigation");


$files = glob('../images/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

header("Location: build.php");
?>