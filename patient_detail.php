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
$name=htmlentities($_POST['name']);
$mobile_no=htmlentities($_POST['mobile_no']);	
if($password!=$con_password){
	$msg = 'failed';
} else {	
$sql="INSERT INTO `patient`(`name`,`mobile_no`) VALUES ('$name','$mobile_no')";
$msg = 'success';
mysqli_query($conn,$sql);
}
header("location: welcome.php?id=$msg");
}
?>