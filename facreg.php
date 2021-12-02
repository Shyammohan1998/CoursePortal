<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
    <title>Faculty Signup</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="assets/css/style-signup.css" rel='stylesheet' type='text/css' media="all">
</head>

<body style="background-color: rgb(213, 249, 255);">
    <!-- header -->
    <header class="w3l-header">
        <div class="hero-header-11">
            <div class="hero-header-11-content">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                        <a class="navbar-brand" href="index.php"><img src="assets/images/logo-icon.png" alt="" />MyGuru<sub style="font-size: 15px; color:orangered;">online</sub></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="courses.php">Courses</a>
                                </li>
                                <li class="nav-item ">
                                    <!-- Trigger the modal -->
                                    <a class="nav-link" data-toggle="modal" data-target="#student" href="#">Student</a>
                                </li>

                                <li class="nav-item ">
                                    <!-- Trigger the modal -->
                                    <a class="nav-link" data-toggle="modal" data-target="#faculty" href="#">Faculty</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a class="nav-link  active" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign
                                            Up</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="studreg.php">Student</a>
                                            <a class="dropdown-item" href="facreg.php">Faculty</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?php include 'modelpopup.php' ;?>
    </header>
    
    <!-- //header -->
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum" style="background-color: rgb(213, 249, 255);"><br>
            <div class="container" style="background-color: rgb(200, 246, 255);">
                <p><a href="index.php">Home</a> &nbsp; / &nbsp; Faculty SignUp</p>
            </div>
        </div>
    </section>
    <!-- //breadcrum -->
    <!-- contact form -->
    <br>
    <div class="hotel-bothside">
		<div class="header-section text-center"><br>
            <h3 class="mb-md-5 mb-4">Faculty Sign-Up</h3>
        </div>
		<form action="" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validate();">
            
			<div class="mid-cls">
				
				<div class="hotel-left-w3ls">
	
					<div class="form-add-to-w3ls add">

						<input type="text" name="fname" placeholder="*First Name" required="" autocomplete="none">
						<div class="clear"></div>
					</div>
					<div class="form-add-to-w3ls add">

						<input type="text" name="lname" placeholder="*Last Name" required="" autocomplete="none">
						<div class="clear"></div>
                    </div>
                    
                </div>
					
				<div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">

						<select class="form-control buttom" required="" name="gender">
                            <option value="" disabled selected>*Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>

                        </select>
                    </div>
                    <div class="form-add-to-w3ls add">
						<div class="form-left-to-w3l">
							<input type="text" name="dob" placeholder="*Date Of Birth" required="" onfocus="(this.type='date')" onblur="(this.type='text')">
						    <div class="clear"></div>
						</div>
                    </div>
                </div>
            </div>
            <div class="form-control-w3l">
                <textarea name="address" placeholder="*Your Full Address" required="" autocomplete="none" title="Enter your full permanant Address"></textarea>
                <div class="clear"></div>
            </div>
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                    <input type="tel" name="mobileno" placeholder="*Mobile : +XX XXXXXXXXXX" pattern="[+][0-9]{2} [0-9]{10}" required="" autocomplete="none" title="mobile number must match the given format">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">
						<div class="form-left-to-w3l">
                            <input type="text" name="fileImg" placeholder="profile photo" onfocus="(this.type='file')" title="Profile picture type must be either png, jpg or jpeg">
						    <div class="clear"></div>
						</div>
                    </div>
                </div>
            </div>
            <div class="form-add-to-w3ls add">
                <input type="email" name="email" placeholder="*Email Address" required="" title="This Email-Id as your Username">
                <div class="clear"></div>
            </div>
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                        <input type="password" id="pswd" name="password" placeholder="*password" required="" title="Please set your Login password">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">
						<div class="form-left-to-w3l">
							<input type="password" id="cnfmpswd" placeholder="*Confirm Password" required="" title="Re-enter your password for confirm">
                        <div class="clear"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                        <input type="text" name="file" placeholder="*Supporting document" onfocus="(this.type='file')" required="" title="Supporting document type must be either pdf, docx or txt">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hotel-right-w3ls">
                    <div class="form-left-to-w3l">
                        <div class="main">
                            <div class="form-left-to-w3l">
                                <div class="bttn">
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="form-left-to-w3l">
                                <div class="bttn">
                                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
		</form>
	</div><br><br>
    <!-- //contact form -->
    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->

    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Template JavaScript -->

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->


    <!-- testimonials owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>

    <!-- script for owlcarousel -->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for owlcarousel -->
    <!-- //testimonials owlcarousel -->

    <!-- script for courses -->
    <script>
        $(document).ready(function() {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for courses -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->
    <script type="text/javascript">
        function validate() {
            var pass1 = document.getElementById("pswd");
            var pass2 = document.getElementById("cnfmpswd");
            var res = true;
            if (pass1.value != pass2.value) {
                alert("password not matched");
                res = false;
            }
            return res;
        }
    </script>
</body>
</html>

<?php
    require 'DBconnection.php' ;
    if (isset($_POST['submit'])) {
        error_reporting(E_ERROR | E_PARSE);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        $passcode = $_POST['password'];
        $sts = 'Requested';

        $filename = $_FILES['file']['name'];
        $destination = 'uploads/' . $filename;
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $file = $_FILES['file']['tmp_name'];
        $size = $_FILES['file']['size'];
        if (!in_array($extension, ['txt', 'pdf', 'docx'])) 
        {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Registration failed. Your Supporting document type must be either pdf, docx or txt');
            window.location='$ret'</script>";
        }
        else if(file_exists($destination)){
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Sorry! your file name $filename is already exist. Please rename your document then try again.');
            window.location='$ret'</script>";
        }
        else if (move_uploaded_file($file, $destination))
        {

            //uploading photo
            if($_FILES['fileImg']['size'] == 0 && $_FILES['fileImg']['error'] == 0)
            {
                $image_name=$fname;
                $file_path="profile-photo/user.jpg";
                $sql = "insert into `faculty`(`fname`,`lname`,`gender`,`dob`,`address`,`mobile`,`email`,`password`,`img_name`,`img_path`,`status`,`resume`) values ('".$fname."','".$lname."','".$gender."','".$dob."','".$address."','".$mobileno."','".$email."','".$passcode."','".$image_name."','".$file_path."','".$sts."','".$filename."');";
                $query = mysqli_query($conn, $sql);
            }
            else 
            {
                if($_FILES["fileImg"]["name"] == '')
                {
                    $image_name=$fname;
                    $file_path="profile-photo/user.jpg";
                    $sql = "insert into `faculty`(`fname`,`lname`,`gender`,`dob`,`address`,`mobile`,`email`,`password`,`img_name`,`img_path`,`status`,`resume`) values ('".$fname."','".$lname."','".$gender."','".$dob."','".$address."','".$mobileno."','".$email."','".$passcode."','".$image_name."','".$file_path."','".$sts."','".$filename."');";
                    $query = mysqli_query($conn, $sql);
                }
                else
                {
                    $file_tmp=$_FILES["fileImg"]["tmp_name"];
                    $file_name=$_FILES["fileImg"]["name"];
                    $image_name=$fname;
                    $file_path="profile-photo/".$file_name;
                    $type = pathinfo($file_name, PATHINFO_EXTENSION);
                    if (!in_array($type, ['png', 'jpg', 'jpeg'])) 
                    {
                        $ret=$_SERVER['HTTP_REFERER'];
                        echo "<script type='text/javascript'>alert('Registration failed. Your profile picture type must be either png, jpg or jpeg');
                        window.location='$ret'</script>";
                    }
                    else if(file_exists($file_path)){
                        $ret=$_SERVER['HTTP_REFERER'];
                        echo "<script type='text/javascript'>alert('Sorry! $file_name image is alreadyexist. Please rename your image then try again.');
                        window.location='$ret'</script>";
                    }
                    else{
                        $sql = "insert into `faculty`(`fname`,`lname`,`gender`,`dob`,`address`,`mobile`,`email`,`password`,`img_name`,`img_path`,`status`,`resume`) values ('".$fname."','".$lname."','".$gender."','".$dob."','".$address."','".$mobileno."','".$email."','".$passcode."','".$image_name."','".$file_path."','".$sts."','".$filename."');";
                        $query = mysqli_query($conn, $sql);
                        move_uploaded_file($file_tmp,$file_path);
                    }
                }
            }
            if (!$query) 
            {
                $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Registration Failed');
                    window.location='$ret'</script>";
            } 
            else {
                echo "<script>$('#success').modal('show')</script>";
                $sub0 = "Welcome to MyGuru Onlne Course Portal";
                $headers0 = "From: MyGuru\-online ";
                $body0 = "Hi ".$fname." ".$lname.",
                \nCongratualation. You have been successfully registered in the MyGuru Online Course Portal as Faculty.
                \nYour Login credentials for the portal are as below
                \nLogin ID : ".$email."\nPassword : ".$passcode."
                \n\nyour Request for join as a faculty is recorded. Please wait for the admin approval messsage via email. After that, Please login into the website today itself to start Teaching. Best of luck for your teaching.
                \nRegards,\nSupport Team
                
                \n\n*** This is System generated Email.please do not reply to it. ***";
                mail($email, $sub0, $body0, $headers0);

                $sql0 = "select * from `admin`;";
                $res0 = mysqli_query($conn, $sql0);
                while($row0=mysqli_fetch_array($res0))
                {
                    $adrs[]=$row0['email'];
                }
                $to=implode(",",$adrs);
                //$to="shyammohan141298@gmail.com";
                $sub="Request for Approval";
                $body="Dear Admin,
                \n\tSomeone want to join our community us a Faculty.please Approve that request, if you wish.

                \n\n*** This is System generated Email.please do not reply to it. ***";
                $headers="From: MyGuru\-online ";
                if(mail($to,$sub,$body,$headers))
                {
                    echo "<script type='text/javascript'>alert('your Request is recorded.please wait for the admin approval');</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('your Request is recorded. please wait for the admin approval. But mail not Sent to the admin');</script>";
                }
                
            }
        }
    }
?>