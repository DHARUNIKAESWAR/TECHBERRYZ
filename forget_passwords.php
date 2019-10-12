<?php
 ob_start();
 session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="docdot"; 
$tbl_name="signup"; 


mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";

$answer_1=$_POST['answer_1']; 
$answer_2=$_POST['answer_2'];



$answer_1 = stripslashes($answer_1);
$answer_2 = stripslashes($answer_2);

$sql="SELECT * FROM $tbl_name WHERE answer_1='$answer_1' and answer_2='$answer_2'";
$result=mysql_query($sql);
$row = mysql_fetch_assoc($result);
$answer_1= $row['answer_1'];

if ($answer_1) {
    $auth = 1;
	 $_SESSION['answer_1'] = $answer_1;
} else {
	$auth = 0;	
}
header("location: forget_password.php?auth=$auth");

?>