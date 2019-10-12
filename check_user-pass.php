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

$username=$_POST['username']; 
$password=$_POST['password'];



$username = stripslashes($username);
$password = stripslashes($password);

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$row = mysql_fetch_assoc($result);
$username= $row['username'];

if ($username) {
    $auth = 1;
	 $_SESSION['username'] = $username;
} else {
	$auth = 0;	
}
header("location: login.php?auth=$auth");

?>