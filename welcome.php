<?php
  ob_start();
  session_start();
  $username=$_SESSION['username'];
  if(!$username){
  header("location: login.php");
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
<style type="text/css">

         
      </style>

   
<body>
 
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/borim-photo.jpeg');">
 
      <div class="wrap-login100">
    <div style="color:white;"><?php
    echo "Welcome Dr.".$username;  echo "  MBBS"
    ?>
          </br> </br><a href="login.php" class="login100-form-btn" style="width: 10px; height:28px; text-decoration: none;">Logout</a></a>
		  <br><a href="patient.php" class="login100-form-btn" style="width: 10px; height:28px; text-decoration: none;">Back</a></a>

 
    </div>
   
        <form class="login100-form validate-form">
     
          <span class="login100-form-title p-b-34 p-t-27">
           
            <h2 style="color:white; font-family:Calibri; font-size:170%;">DOCDOT</h2>
          </span>
          <center>
          <div class="container-login100-form-btn">
             <a class="login100-form-btn" href="checkmedicine.php"style="width: 180px; height:50px; text-decoration: none;">SUGGEST MEDICINE</a>
           
          </div>
        </center>
          <br>
          <br>
          <center>
<div class="container-login100-form-btn">
         <form>  
  <button class="login100-form-btn" style="width: 180px; height:50px" type='submit' formaction="app.rar"download>
              SCAN REPORTS
            </button>
</form>
           
          </div>
          </center>  
          <br>

         
          <br>

          <center>
            <div class="container-login100-form-btn">
            <form>
            <button class="login100-form-btn" style="width: 180px; height:50px" type='submit' formaction="https://dharunikacs17.wixsite.com/website">
            DOC BLOG
            </button>
        </form>
          </div>
          </center>
          <br>
          <br>
          <center>
            <div class="container-login100-form-btn">
           <div class="container-login100-form-btn">
             <a class="login100-form-btn" href="drugsymbtom.php"style="width: 180px; height:50px; text-decoration: none;">DOC PLUS</a>
           
          </div>
          </div>
          </center>
          <br>
          <center>
          <b>
         <h1 style="color:white; font-family:Calibri; font-size:170%;">YOUR MEDIC BOOK AT</h1>
         <br>
          <h1 style="color:white; font-family:Calibri; font-size:170%;">YOUR POCKET</h1>
         
          </b>
        </center>
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