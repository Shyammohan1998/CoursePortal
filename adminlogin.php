<!DOCTYPE html>
<html lang="zxx">
<head>
    <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
	<title>Admin Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Working Signin form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
    <link rel="stylesheet" href="assets/css/style-login.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style-starter.css">
	<!--//Style-CSS -->
</head>

<body style="background-color: rgb(213, 249, 255);">

	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                <a class="brand-logo" href="index.php"><img src="assets/images/logo-icon.png" alt="" />
                    <b style="color: black;"> MyGuru</b><sub style="font-size: 20px; color:orangered;">online</sub></a>
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src="assets/images/admin.png" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content">
                        <center><h1>Admin</h1></center>
                        <form action="verification.php" class="signin-form" method="post" autocomplete="off">
								<div class="one-frm">
									<label>Username</label>
									<input type="text" name="user"  placeholder="" required="" title="Registered Email-Id as your login Username">
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="password"  placeholder="" required="">
								</div>
                                <br>
                                <button class="btn btn-style mt-3" name="adminlogin">Sign In </button>
                                <p class="already"><a href="#" data-toggle="modal" id="forgotPassword"
                                        data-target="#adminforgot" class="form-check-label">Forgot Password?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
        <!-- copyright-->
        <div class="copyright text-center">
            <div class="wrapper">
                <p class="copy-footer-29">© 2021 MyGuru | All rights reserved | Design by <a href="http://shyam.epizy.com" style="color: orangered;">ShyamM</a></p>
            </div>
        </div>
        <!-- //copyright-->
    </section>
    <!-- Forgot Password Popup-->
    <div class="modal fade" id="adminforgot" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="verification.php" method="POST" autocomplete="off">
                    <div class="form-group" style="text-align: center;"><br>
                        <input type="text" name="email" class="contact-input" placeholder="Registered Email-id" required="" style="width: 60%;" /><br><br>
                        <button type="submit" class="btn btn-primary" style="width: 60%;" name="adminforgot">Submit</button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---- Forgot Password Popup --->
    <!-- //form section start -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>