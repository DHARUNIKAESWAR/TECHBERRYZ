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
                                                                            
                        
if(isset($_GET['drug_name']))
$drug_name=$_GET['drug_name'];
$sql="SELECT drug_name,rating FROM $tbl_name WHERE drug_name='$drug_name'";
$result=mysql_query($sql);
 
 
while ($row = mysql_fetch_array($result))
{
   $drug_name=$row['drug_name'];
   $rating=$row['rating'];
  

  }
if(isset($_GET['msg']))


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DOCDOT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/icon" href="images/icons/stethos.icon"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/borim-photo.jpeg');">


			<div class="wrap-login100">



</a>
	
					<span class="login100-form-title p-b-34 p-t-27">
						 <h2 style="color:white; font-family:Calibri; font-size:150%;">REVIEW</h2>
					</span><br>
<div class="wrap-input100 validate-input" >
						<span style="
    color: white;
    font-size: 22px;
" >
    MEDICINE  :  </span>
					<span class="wrap-input100 validate-input" style="
    color: white;
    font-size: 22px;
    margin-left: 39px;
" >
						 <?php
						 echo $drug_name;
						 ?>
						<span class="focus-input100" data-placeholder=""></span>
					</span>
						<span class="focus-input100" data-placeholder=""></span>
					</div><br>
					


<div class="wrap-input100 validate-input" >
						<span style="
    color: white;
    font-size: 22px;
" >
    RATINGS  :  </span>
					<span class="wrap-input100 validate-input" style="
    color: white;
    font-size: 22px;
    margin-left: 39px;
" >
						 <?php
						 echo $rating."0%";
						 ?>
						<span class="focus-input100" data-placeholder=""></span>
					</span>
						<span class="focus-input100" data-placeholder=""></span>
					</div><br>
          <br>
		   <div class="container-login100-form-btn">
<a class="login100-form-btn" href="welcome.php"style="width: 180px; height:50px; text-decoration: none;">  BACK </a>               
            
          </div>
          	</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>