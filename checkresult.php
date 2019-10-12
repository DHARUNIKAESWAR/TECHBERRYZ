<?php
error_reporting(0);

 ob_start();
 session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="docdot"; 
$tbl_name="check_medicine"; 
                                                                            
                                                                             
mysql_connect("$host", "$username", "$password") or die(mysql_error());     
                                                                            
mysql_select_db("$db_name") or die(mysql_error());   
                                                                            
$disease_condition=$_GET['disease_condition'];  
$severity=$_GET['severity'];                                                        
$age_group=$_GET['age_group'];                     	
 
                                                                            
$disease_condition = stripslashes($disease_condition);   
$severity = stripslashes($severity);                     
$age_group=stripslashes($age_group);                         
 
 $sql="SELECT * FROM $tbl_name WHERE disease_condition='$disease_condition' and severity='$severity' and age_group='$age_group'";
$result=mysql_query($sql);
 
 
while ($row = mysql_fetch_array($result))
{
  $medicine=$row['medication'];
  $dosage=$row['dosage'];
  $rating=$row['rating'];

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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form action="prescription.php" method="POST" id="prescription_page.php">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/borim-photo.jpeg');">


			<div class="wrap-login100">
				

				<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
					<a href="welcome.php" class="login100-form-btn" style="width: 10px; height:28px; text-decoration: none;">Back</a></a>

</a>
		
					<span class="login100-form-title p-b-34 p-t-27">
						 <h2 style="color:white; font-family:Calibri; font-size:150%;">PRESCRIPTION</h2>
					</span><br>
					

<div class="wrap-input100 validate-input" >
						<span style="
    color: white;
    font-size: 22px;
" >
    MEDICINES  :  </span>
					<span class="wrap-input100 validate-input" style="
    color: white;
    font-size: 22px;
    margin-left: 39px;
" ><?php
$select_query="SELECT * FROM $tbl_name WHERE disease_condition='$disease_condition' and severity='$severity' and age_group='$age_group' ";
$select_query_run =mysql_query($select_query);
?>
<select name="check_medicine" onchange="myFunction(this.value)">
<option value=""> Select medicines</option>
<?php if($_GET['med_id']) { ?>
<option selected="selected">
<?php echo $_GET['med_id'];?>
</option>
<?php
}
while ($select_query_array=mysql_fetch_array($select_query_run) )
{
   echo "<option value='".$select_query_array['medication']."' >".htmlspecialchars($select_query_array["medication"])."</option>";
}
echo "</select>";
?>
						<span class="focus-input100" data-placeholder=""></span>
					</span>
						<span class="focus-input100" data-placeholder=""></span>
					</div><br>
					<div class="wrap-input100 validate-input" >
						<span style="
    color: white;
    font-size: 22px;
	border-radius:8px;
" >
    PATIENT  :  </span>
					<span class="wrap-input100 validate-input" style="
    color: white;
    font-size: 22px;
    margin-left: 39px;
	
" ><?php
$select_query="Select id,name from patient";
$select_query_run =mysql_query($select_query);
?>
<select name='patient'>
<option value=""> Select patient</option>
<?php
while ($select_query_array=mysql_fetch_array($select_query_run) )
{
   echo "<option value='".$select_query_array['id']."' >".htmlspecialchars($select_query_array["name"])."</option>";
}
echo "</select>";
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
    DOSAGE  :  </span>
					<span class="wrap-input100 validate-input" style="
    color: white;
    font-size: 22px;
    margin-left: 39px;
" >

<?php 
$medid = $_GET['med_id'];
$query = "SELECT dosage FROM $tbl_name WHERE disease_condition='$disease_condition' and severity='$severity' and age_group='$age_group' and medication='$medid'";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);


?>
						 <?php
						 echo $row['dosage'];
						  
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

<?php 
$medid = $_GET['med_id'];
 $query = "SELECT CEIL((sum(rating)/(count(id)*10)) *100) as percentage  FROM `feedback` WHERE drug_name='$medid'";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);


?>
    RATING  :  </span>
					<span class="wrap-input100 validate-input" style="
    color: white;
    font-size: 22px;
    margin-left: 39px;
	
" >
						 <?php
						 if($row['percentage']) {
						 echo $row['percentage']. '%';
						 } else {
							 echo "No Rating Available";
						 }
						 ?>
						<span class="focus-input100" data-placeholder=""></span>
					</span>
						<span class="focus-input100" data-placeholder=""></span>
					</div><br>
					<div class="wrap-input100 validate-input" data-validate = "Enter quantity">
										<h2 style="color:white; font-family:Arial Black; font-size:100%;">MEDICINE QUANTITY</h2>

						<input class="input100" type="text" name="medicine_quantity" value="6" placeholder="MEDICINE QUANTITY">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter noofdays">
										<h2 style="color:white; font-family:Arial Black; font-size:100%;">DAY COUNT FOR MEDICINE</h2>

						<input class="input100" type="text" name="day_count" value="3" placeholder="DAY COUNT FOR MEDICINE">
						<input class="input100" type="hidden" name="medicine" value="<?php echo $medicine;?>"placeholder="DAY COUNT FOR MEDICINE">

						<span class="focus-input100"></span>
					</div>
					<br>
					<h2 style="color:white; font-family:Arial Black; font-size:100%;">INTAKE OF MEDICINE</h2>
					<div>
                    <label><input type="radio" name="medicine_intake" id="before" value="B">BEFORE FOOD</label>
					<br>
                    <label><input type="radio" name="medicine_intake" id="after" value="A">AFTER FOOD</label>
					<br>
                    <h2 style="color:white; font-family:Arial Black; font-size:100%;">TIME INTERVALS</h2>
  					<input type="checkbox" name="time_intervals[]" value="FN ">MORNING<br>
					<br>
                    <input type="checkbox" name="time_intervals[]" value="AN ">AFTERNOON<br>
					<br>
                    <input type="checkbox" name="time_intervals[]" value="EVN " checked>EVENING<br>
					<br>
                    <input type="checkbox" name="time_intervals[]" value="NYT " checked>NIGHT<br><br>
                </div>
					
             <div class="container-login100-form-btn">
<button type="submit" form="prescription_page.php" value="create_prescription" name="submit" class="login100-form-btn">Create Prescription</button>             
					</div>
            
          
          <br>
          
             
            
       
          
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script>
function myFunction(val) {
	 var loc = window.location;
     var old =   loc.pathname + loc.search;
	 
	 var arr = old.split("&");
	 var newVal = arr[0] +'&'+ arr[1] +'&'+ arr[2] +'&'+ "med_id="+val;
	 window.location = newVal;
}
</script>


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