<!--student-->
    <!-- Forgot Password Popup-->
    <div class="modal fade" id="studentforgot" role="dialog">
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
                            <button type="submit" class="btn btn-primary" style="width: 60%;" name="studentforgot">Submit</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---- Forgot Password Popup --->
    <!---- Login Popup --->
    <div class="modal fade" id="student" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" action="verification.php" method="POST" autocomplete="off">
                        <div class="form-group" style="text-align: center;"><br>
                            <input type="text" name="user" class="contact-input" placeholder="Username / Email" required="" style="width: 60%;" title="Registered Email-Id as your login Username"/><br><br>
                            <input type="password" name="password" class="contact-input" placeholder="Password" required="" style="width: 60%;" /><br><br>
                            <button type="submit" class="btn btn-primary" style="width: 60%;" name="studentlogin">log
                                In</button><br><br>
                            <div class="form-check">
                                <a href="#" data-dismiss="modal" data-toggle="modal" id="forgotPassword" data-target="#studentforgot" class="form-check-label" style="color: blue;">Forgot
                                    Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-12 text-center">
                        <a href="studreg.php" class="btn btn-outline-primary" style="width: 60%;">Create New Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- Login Popup --->
<!--student-->

<!--faculty-->
    <!-- Forgot Password Popup-->
    <div class="modal fade" id="facultyforgot" role="dialog">
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
                            <button type="submit" class="btn btn-primary" style="width: 60%;" name="facultyforgot">Submit</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---- Forgot Password Popup --->
    <!---- Login Popup --->
    <div class="modal fade" id="faculty" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" action="verification.php" method="POST" autocomplete="off">
                        <div class="form-group" style="text-align: center;"><br>
                            <input type="text" name="user" class="contact-input" placeholder="Username / Email" required="" style="width: 60%;" title="Registered Email-Id as your login Username"/><br><br>
                            <input type="password" name="password" class="contact-input" placeholder="Password" required="" style="width: 60%;" /><br><br>
                            <button type="submit" class="btn btn-primary" style="width: 60%;" name="facultylogin">log
                                In</button><br><br>
                            <div class="form-check">
                                <a href="#" data-dismiss="modal" data-toggle="modal" id="forgotPassword" data-target="#facultyforgot" class="form-check-label" style="color: blue;">Forgot
                                    Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-12 text-center">
                        <a href="facreg.php" class="btn btn-outline-primary" style="width: 60%;">Create New Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- Login Popup --->
<!--faculty--> 

<!--success popup-->
<div class="modal fade" id="success" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <center>
            <div class="modal-content" style="width:70%;">
                <div class="modal-body"><b>Registration Success</b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="assets/images/success.png" class="img-responsive" alt="">
                </div>
            </div>
            </center>
        </div>
    </div>
<!--success popup--> 


