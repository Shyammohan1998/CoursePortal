<?php require 'DBconnection.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
    <title>Courses</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }

        p {
            color: white;
        }

        #input {
            width: 60%;
            margin-top: 20px;
        }

        #hov:hover {
            border: 2px solid white;
        }
    </style>
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
                                <li class="nav-item active">
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
                                        <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign Up</a>
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
        <?php include 'modelpopup.php'; ?>
    </header>
    <!-- //header -->
    <div class="container">
        <!-- breadcrum -->
        <section class="w3l-skill-breadcrum">
            <div class="breadcrum" style="background-color: rgb(213, 249, 255);"><br>
                <div class="container" style="background-color: rgb(200, 246, 255);">
                    <p><a href="index.php">Home</a> &nbsp; / &nbsp; Courses</p>
                </div>
            </div>
        </section><br>
        <!-- //breadcrum -->
        <section class="w3l-team" id="team">
            <center>
                <div class="team-block">
                    <div class="container">
                        <div class="wthree-title">
                            <div class="header-section text-center">
                                <div><h3>Available Online Courses</h3>
                                <input type="search" id="myInput" placeholder="Search..." class="form-control" >
                            </div>
                        </div>

                        <div class="row" id="myDIV">
                            <?php
                            $sql = "select * from `course` where `status` in ('Ongoing','completed');";
                            $res = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo "<div class='col-lg-4 col-sm-6 mt-5'>
                            <div class='flip-card' id='card'>
                                <div class='flip-card-inner'>
                                    <div class='flip-card-front container' style='padding-top:30%;'>
                                        <h1>" . $row['title'] . "</h1>
                                        <hr style='background-color: white;height:1px;'>
                                        <h5>" . $row['status'] . "</h5>
                                    </div>
                                    <div class='flip-card-back container' >
                                            <h2 >" . $row['title'] . "</h2>
                                            <p style='font-size:small;margin-bottom:2px;'>" . $row['discription'] . "</p>
                                            <p>Duration : " . $row['duration'] . "</p>
                                            <p>Teacher Name : " . $row['teacher_name'] . "</p><br>
                                            <button id='hov' class='btn btn-primary' style='width:50%;border-radius:50px;' data-toggle='modal' data-target='#joinpopup";
                                echo $row['id'];
                                echo "'>join</button>
                                    </div>
                                </div>
                            </div>
                        </div>";

                                echo "<div class='modal fade' id='joinpopup";
                                echo $row['id'];
                                echo "' role='dialog'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <!-- Modal content-->
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='col-11 modal-title text-center' style='font-size:30px; color:rgb(255, 115, 0)' id='exampleModalLongTitle'>&nbsp;&nbsp; Enrolling Details</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <form action='dml.php' method='POST' autocomplete='off'>
                                            <div class='form-group' style='text-align: center;'>
                                                <input type='text' name='sname' class='contact-input' id='input' placeholder='Name' required='' autocomplete='none' />
                                                <input type='email' name='semail' class='contact-input' id='input' placeholder='Email Address' required='' />
                                                <input type='text' name='cname' class='contact-input' id='input' placeholder='Course Title' required='' value='" . $row['title'] . "' autocomplete='none' />
                                                <button type='submit' id='input' class='btn btn-primary' name='join'>Submit</button><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </center>
        </section><br>
    </div>

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

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myDIV #card").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>