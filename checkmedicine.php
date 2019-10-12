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
<style type="text/css">

</style>
<body>
  <form action="checkresult.php" method="GET" id="checkresult.php">
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/borim-photo.jpeg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form">
      
          <span class="login100-form-title p-b-34 p-t-27">
            
            <h2 style="color:white; font-family:Calibri; font-size:120%;">SUGGEST MEDICINES</h2>
          </span>
          <center>
          <div>
<select  name="disease_condition" style="width:210px; height:42px; border-radius:15px; font-family:Arial Rounded MT Bold; font-size: 13px;">
<option value="Select Disease">SELECT DISEASE / SYMPTOM</option>
<option value="Acne">Acne</option>
<option value="Fever">Fever</option>
<option value="Cold">Cold</option>
<option value="Cough">Cough</option>
<option value="Tuberculosis">Tuberculosis</option>
<option value="Migraine">Migraine</option>
<option value="Pneumonia">Pneumonia</option>
<option value="Smokingcessation">Smokingcessation</option>
<option value="Ulcer">Ulcer</option>
<option value="Diarrhea">Diarrhea</option>
<option value="Hyperhidrosis">Hyperhidrosis</option>
<option value="Smallpox">Smallpox</option>
<option value="Throatpain">Throatpain</option>
<option value="Highbloodpressure">Highbloodpressure</option>
<option value="Headache">Headache</option>
<option value="Insomnia">Insomnia</option>
<option value="Weightloss">Weightloss</option>
<option value="Asthma">Asthma</option>
<option value="Keratosis">Keratosis</option>
<option value="Narcolepsy">Narcolepsy</option>
<option value="Diabetes">Diabetes</option>
<option value="Bipolardisorder">Bipolardisorder</option>
<option value="Nausea/vomiting">Nausea/vomiting</option>
<option value="Obesity">Obesity</option>
<option value="Depression">Depression</option>
<option value="Panicdisorder">Panicdisorder</option>
<option value="Allergicrhinitis">Allergicrhinitis</option>
<option value="Musclespasm">Musclespasm</option>
<option value="Influenza">Influenza</option>
</select>
</div><br>
<br>
<div>
<select name="age_group" style="width:210px; height:42px; border-radius:15px; font-family:Arial Rounded MT Bold; font-size: 13px;">
    <center><option value="" disabled selected>AGE GROUP</option></center>
    <option value="Child">Children</option>
    <option value="Teen">Teen</option>
    <option value="Adult">Adult</option>
</select>
</div>
<br>
<br>
<div>
<select name="severity" style="width:210px; height:42px; border-radius:15px; font-family:Arial Rounded MT Bold; font-size: 13px;">
    <option value="" disabled selected>SEVERITY</option>
    <option value="Low">Low</option>
    <option value="Medium">Medium</option>
    <option value="High">High</option>
</select>
</div>
</center><br>
<br>
          <center>
            <div class="container-login100-form-btn">
            <div class="container-login100-form-btn">
            
<button type="submit" form="checkresult.php" value="SUBMIT" name="submit" class="login100-form-btn">SUBMIT</button>             
          </div>
          </div>
          </center>
          <br>
          <br>
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