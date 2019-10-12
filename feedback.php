<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "docdot";
$conn = new mysqli($servername, $username, $password, $database);


if(!$conn){
	echo"error";
}

if(isset($_POST['submit'])) {
$drug_name=htmlentities($_POST['drug_name']);	
$rating=htmlentities($_POST['rating']);
	
$sql="INSERT INTO `feedback`(`drug_name`, `rating`) VALUES ('$drug_name','$rating')";

mysqli_query($conn,$sql);

header("location: welcome.php?");
}
?>