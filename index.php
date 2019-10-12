<!DOCTYPE html>

 <html class="not-ie no-js" lang="en">  
    <head>

        <meta charset="utf-8">
        <title>docdot</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <link href="css/slicknav.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		

        <script src="js/modernizr.js"></script>

        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        

    </head>

    <body>

        <header class="header">

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">
								


                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8 col-xs-12">

                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </section>

            </div>

            <div class="main-baner">

                <div class="fullscreen background parallax clearfix" style="background-image:url('img/healthcare.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1 style="font-family:Algerian; color:white; font-size:60px;">DOCDOT</h1>
                                            </div>

                                        </div>

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
													
                                                        <a href="home.php" style="font-size:24px;"><b>LAUNCH DOCDOT</b></a>
														
                                                    </li>
													
                                                    
                                                </ul>

                                            </nav>

                                        </div>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </div>

                </div>

            </div>

        </header>

        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="page-content">

                        <div class="services clearfix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                               

                            </div>


                                <div class="clearfix"></div>

                                

                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="events box-fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
							</div>

                               

                            <div class="col-md-12 col-sm-12 col-xs-12">
							</div>
						

                               

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </section>

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by Google
                        </div>

                    </div>
                </div>

            </div>

        </footer>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form class="login100-form validate-form" method="post" action="login.php">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>
							
						<?php if(isset($_GET['auth'])) { 
					if($_GET['auth']==1)
					{
						header("location:signup.php");
						} else { ?>
							<div style="color: red;text-align: center;">
					Login failed!
					</div>
						<?php } }?>

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="USERNAME">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="PASSWORD">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Log in</button>
                            </div>

                            <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>

                            <div class="clearfix"></div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        				
						<form class="login100-form validate-form" method="post" action="signup.php">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>
							
							<div class="wrap-input100 validate-input" data-validate = "Enter username">
                                <input name="username" type="text" placeholder="Username" required>
                               <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Enter E-Mail">
                                <input name="email" type="text" placeholder="E-Mail" required>
                                <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                            </div>
							
							<div class="wrap-input100 validate-input" data-validate = "Enter Mobile_no">
                                <input name="mobile_number" type="text"  placeholder="Mobile number" required>
                                <span class="focus-input100" data-placeholder="&#xf2be;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Enter password">
                                <input type="password" name="password" placeholder="Password" required>
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Enter confirm_password">
                                <input name="con_password" type="password"  placeholder="ConfirmPassword" required>
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" value="signup" name="submit" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>
</html>
