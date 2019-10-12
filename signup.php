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
$doctor_id=htmlentities($_POST['doctor_id']);	
$username=htmlentities($_POST['username']);
$mail_id=htmlentities($_POST['email']);
$mobile_no=htmlentities($_POST['mobile_number']);
$password=htmlentities($_POST['password']);
$con_password=htmlentities($_POST['con_password']);
$answer_1=htmlentities($_POST['answer_1']);
$answer_2=htmlentities($_POST['answer_2']);
if($password!=$con_password){
	$msg = 'failed';
} else {	
$sql="INSERT INTO `signup`(`doctor_id`, `username`, `mail_id`, `mobile_no`,`password`,`answer_1`,`answer_2`) VALUES ('$doctor_id','$username','$mail_id','$mobile_no','$password','$answer_1','$answer_2')";
$msg = 'success';
mysqli_query($conn,$sql);
}
header("location: sign.php?msg=$msg");
}
?>