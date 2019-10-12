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
				<form class="login100-form validate-form" method="post" action="signup.php" id="signup.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-hospital-alt"></i>
					</span>

					<span class="login100-form-title p-t-27">
						<h2 style="font-family: Calibri; font-size:45px; color:white;">SIGN UP</h2>
					</span>
					<br>
					<?php if(isset($_GET['msg'])) { 
					if($_GET['msg']=='success')
					{
						header("location: login.php");
						} else { ?>
							<div style="color: red;text-align: center;">
						Password does not match
					</div>
						<?php } }?>
						<div class="wrap-input100 validate-input" data-validate = "Enter doctorid">
						<input class="input100" type="text" name="doctor_id" placeholder="DOCTOR ID">
						<span class="focus-input100" data-placeholder="&#xf205;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="USERNAME" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter E-MAIL">
						<input class="input100" type="text" name="email" placeholder="E-MAIL" required>
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter MOBILE_NO">
						<input class="input100" type="text" name="mobile_number" placeholder="MOBILE NUMBER" required>
						<span class="focus-input100" data-placeholder="&#xf2be;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="PASSWORD" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

<div class="wrap-input100 validate-input" data-validate="Enter con_password">
						<input class="input100" type="password" name="con_password" placeholder="CONFIRM PASSWORD" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					Who is your favourite person ?
					<div class="wrap-input100 validate-input" data-validate = "Answer 1">
						<input class="input100" type="text" name="answer_1" placeholder="Answer 1" required>
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					Who is your enemy  ?
					<div class="wrap-input100 validate-input" data-validate="Answer 2">
						<input class="input100" type="text" name="answer_2" placeholder="Answer 2" required>
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="container-login100-form-btn">
<button type="submit" form="signup.php" value="SUBMIT" name="submit" class="login100-form-btn">SIGNUP</button>             
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