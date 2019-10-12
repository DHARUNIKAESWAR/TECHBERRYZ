<?php
 ob_start();
 session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="docdot"; 
$tbl_name="prescription"; 
                                                                            
                                                                             
mysql_connect("$host", "$username", "$password") or die(mysql_error());     
                                                                            
mysql_select_db("$db_name") or die(mysql_error());   
                                                                            
                        
 

$patient_id=$_GET['id'];
$sql="SELECT date,medicines,medicine_quantity,day_count,medicine_intake,time_intervals FROM $tbl_name WHERE patient_id='$patient_id'";


 $result=mysql_query($sql);
 
 $sqlP="SELECT id, name FROM `patient` WHERE id='$patient_id'";


 $res=mysql_query($sqlP);
	
 
 while ($rowP = mysql_fetch_array($res)) {
	$name = $rowP['name']; 
	$id = $rowP['id']; 
 }
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
	<link rel="stylesheet" type="text/css" href="css/trial.css">
<!--===============================================================================================-->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body>


	<div class="limiter">
		<div class="container-login100" >
		
		<?php 
  
  $username=$_SESSION['username'];
  if(!$username){
  header("location: patient_history.php");
  }
?>
			

	
			<div class="wrap-login100">
				<form class="login100-form validate-form">
		
				
	

					<span class="login100-form-title" style="
    text-align: left;
">
					<img src="images/logo1.png" alt="Smiley face" height="150" width="150">
					<img src="images/logo1.jpg" alt="Smiley face" height="120" width="400">
	
					</span>
					
					
					<hr>
					<hr size="1">
					<p class="ex1" style=" color: #000"><?php 
    echo "Dr. ".$username; echo "  MBBS"
    ?>
					<p class="ex1" style="margin-bottom: -71px;text-align: right;color: #000;">Patient_name  :  <?php echo $name;?></P>
					<br>
					
					
					<p class="ex1" style="text-align: right; color: #000">Patient_ID: DOCDOT00<?php echo $id;?>

    </p>
    

					<p class="ex1" style="text-align: left; color: #000">Date: <?php echo date('d-m-Y');
?></p>
					<br>
					<br>
					<div style="width: 500px;height: 500px;border: 1px solid #000;">
					<div class="row">
					
<table>
  <tr>
  <th>DATE </th>
    <th>MEDICINE NAME
</th>
    
    <th>QUANTITY</th>
    <th>NO.OF DAYS</th>
	<th>B/A FOOD</th>
    <th>TIME INTERVAL</th>
  </tr>
  

					<?php
					while ($row = mysql_fetch_array($result))
{
   $medicines=$row['medicines'];
	$medicine_quantity=$row['medicine_quantity'];
     $day_count=$row['day_count'];
	   $medicine_intake=$row['medicine_intake'];
	     $time_intervals=$row['time_intervals'];

  
  ?>
  <tr>
    <td><?php
							echo $medicines
							?></td>
    <td><?php
							echo $medicine_quantity
							?></td>
    <td><?php
							  echo $day_count
							  ?></td>
	<td><?php
							echo $medicine_intake
							?></td>
    <td><?php
							 echo $time_intervals
							 ?></td>
  </tr>
  
	
<?php } ?>
			</table>		</div>

					</div>

					<br>
					<br>
					<br>
					<p class="ex1" style="text-align: left; color: #000">Doctor's signature:</p>
					<br>
									



<script>
function myFunction() {
  window.print();
}
</script>
					
					</div>
					<div class="container-login100-form-btn">
						
					
						</div>	
<div class="container-login100-form-btn">
						<div class="container-login100-form-btn">
             <a class="login100-form-btn" href="checkmedicine.php"style="width: 180px; height:50px; text-decoration: none;">ADD MEDICINE</a>
           
          </div>
				        <button class="login100-form-btn" style="margin:15px;" onclick="myFunction()">
					Print
					
						
						
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