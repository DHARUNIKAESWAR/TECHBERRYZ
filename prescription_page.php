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
$sql="SELECT medicines,medicine_quantity,day_count,medicine_intake,time_intervals FROM $tbl_name WHERE patient_id='$patient_id'";


 $result=mysql_query($sql);
 
 $msgrow=mysql_fetch_assoc($result);
 
 $messages = 'Medicines '. $msgrow['medicines']. ', Medicine Quantity '. $msgrow['medicine_quantity']. ' Day count '. $msgrow['day_count']. ', Medicine Intake '. $msgrow['medicine_intake']. ' Time Intervals ' .$msgrow['time_intervals'];

 $sqlP="SELECT id, name, mobile_no FROM `patient` WHERE id='$patient_id'";


 $res=mysql_query($sqlP);
	
 
 while ($rowP = mysql_fetch_array($res)) {
	$name = $rowP['name']; 
	$id = $rowP['id']; 
	$mobile = $rowP['mobile_no'];
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
  header("location: prescription.php");
  }
  
  if(isset($_POST['send'])) {
  // Account details
	$apiKey = urlencode('bWGtZuI3WV0-IhME5NMb2KR1nRqCgxBqnd7z1Frybx');
	
	// Message details
	$numbers = $mobile;
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($messages);
 
	// $numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
  }
?>
			

	
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
		
				
	

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
					<div style="width: 600px;height: 500px;border: 1px solid #000;">
					<div class="row">
					
<table>
  <tr>
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
<p class="ex1" style="text-align: left; color: #000">Doctor's signature:</p>
					<br>
					<br>
					<br>
					<h3 class="ex1" style="text-align: left; color: #000">DO's OF TAKING MEDICATIONS:</h3>
						<p class="ex1" style="text-align: left; color: #000">1.	Medication should be stored in a cool dry place </p>
							<p class="ex1" style="text-align: left; color: #000">2.Beware of possible side effects and always consult you pharmacist of doctor
 </p>
								<p class="ex1" style="text-align: left; color: #000">3.Adhere and endeavor to comply with the treatment plan
 </p>
			
					<h3 class="ex1" style="text-align: left; color: #000">DONT's OF TAKING MEDICATIONS:</h3>
						<p class="ex1" style="text-align: left; color: #000">1.Do not share your medication with someone else
  </p>
				
 
 
								<p class="ex1" style="text-align: left; color: #000">3.Do not use medication when it is past its expiry date
 </p>			



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
						<input type="submit" value="Send Message" name="send">
						<div class="container-login100-form-btn">
             <a class="login100-form-btn" href="patient.php"style="width: 180px; height:50px; text-decoration: none;">BACK</a>
           
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