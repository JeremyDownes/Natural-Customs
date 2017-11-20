<?php
$heading = $_POST["heading"];
$heading = addslashes($heading);
$textContent = $_POST["paragraph"];
$textContent = addslashes($heading);
$servername = "localhost";
$username = "NaturalCustoms";
$password = "1life2live";
$dbname = "NaturalCustoms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$target_dir = "../images/";
$imageURL = "resources/images/".$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>alert('Sorry, file already exists.');</script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "<script>alert('Sorry, your file is too large.');</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<a href='build.php'>Try Again</a>";
    

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

	$insertData = "INSERT INTO navigation (heading, imageURL)
	VALUES ('$heading', '$imageURL')";
	$conn->query($insertData);
	header('Location:build.php');

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>