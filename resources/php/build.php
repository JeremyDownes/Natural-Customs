<html>
<body>
<form action="uploadNlog.php" method="post" enctype="multipart/form-data">
Heading: <input type="text" name="heading"><br>
Select image to upload: <input type="file" name="fileToUpload" id="fileToUpload">
Paragraph: <input type="textfield" name="paragraph"><br>
<input type="submit">
</form>

<?php
$servername = "localhost";
$username = "NaturalCustoms";
$password = "1life2live";
$dbname = "NaturalCustoms";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT heading, imageURL, textContent FROM navigation";

$tableData = $conn->query($sql);
if ($tableData->num_rows > 0) {
    // output data of each row
    while($row = $tableData->fetch_assoc()) {
        echo "<h1>".$row["heading"]."<img src='". $row["imageURL"]."'> <p>".$row["textContent"]. "</p><br>";
    }
} else {
    echo "0 results";
}
?>
<form action="clearDB.php">
<input type="submit" value="Clear Database">
</form>
<form action="deleteDB.php">
<input type="submit" value="Delete Database">
</form>
</body>
</html>