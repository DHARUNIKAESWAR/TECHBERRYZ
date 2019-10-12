<?php
 ob_start();
 session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="docdot"; 
$tbl_name="feedback"; 
                                                                            
                                                                             
mysql_connect("$host", "$username", "$password") or die(mysql_error());     
                                                                            
mysql_select_db("$db_name") or die(mysql_error());   
                                                                            
                                   
$drug_name=$_POST['drug_name'];                     	
$rating=$_POST['rating'];   
                                                                            
$drug_name=stripslashes($drug_name);
$rating=stripslashes($rating);                         
 

$sql="SELECT * FROM $tbl_name WHERE rating='$rating' ";
$result=mysql_query($sql);
 
 
while ($row = mysql_fetch_array($result))
{
  $drug_name=$row['drug_name'];
  $rating=$row['rating'];

  }



?>