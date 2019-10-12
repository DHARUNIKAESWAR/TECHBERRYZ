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
		<div class="container-login100" style="background-image: url('images/pexels-photo-415825.jpeg');">
			

			<div class="wrap-login100">
				<form class="login100-form validate-form" method="GET" action="forget_passwords.php">
					<span class="login100-form-title p-b-34 p-t-27">
						<h2 style="font-family: Algerian; font-size:60px; color:white;">FORGET PASSWORD</h2>
					</span>
					<?php if(isset($_GET['auth'])) { 
					if($_GET['auth']==1)
					{
						header("location:update_password.php");
						} else { ?>
							<div style="color: red;text-align: center;">
					Login failed!
					</div>
						<?php } }?>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="ENTER EMAIL">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<h2 style="font-family: Arial Black; font-size:30px; color:white;">Who is your favourite person ?</h2>
					<div class="wrap-input100 validate-input" data-validate = "Enter answer1">
						<input class="input100" type="text" name="answer1" placeholder="ANSWER 1">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<h2 style="font-family: Arial Black; font-size:30px; color:white;">Who is your enemy person ?</h2>
					<div class="wrap-input100 validate-input" data-validate = "Enter answer2">
						<input class="input100" type="text" name="answer2" placeholder="ANSWER 2">
						<span class="focus-input100" data-placeholder=""></span>
					</div>


					<div class="container-login100-form-btn">
						<input type="submit" value="Submit" name="submit" class="login100-form-btn" >
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