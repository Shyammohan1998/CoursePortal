<?php require 'DBconnection.php' ;?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
  <title>AboutUs</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body style="background-color: rgb(213, 249, 255);">
  <!-- header -->
  <header class="w3l-header">
    <div class="hero-header-11">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo-icon.png" alt="" />MyGuru<sub
                style="font-size: 15px; color:orangered;">online</sub></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
                  
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Sign Up</a>
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
        <p><a href="index.php">Home</a> &nbsp; / &nbsp; About</p>
      </div>
    </div>
  </section>
  <!-- //breadcrum -->
  
  <section class="w3l-about1" id="about">
    <div id="cwp23-block" class="py-5">
      <div class="container py-lg-5">
        <div class="row cwp23-content align-items-center">
          <div class="col-lg-6 cwp23-text">
            <div class="cwp23-title">
              <h3>Welcome to the
                Professional Education Theme! </h3>
            </div>
            <div class="cwp23-text-cols">
              <div class="column">
                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                <a href="#">Trending Courses</a>
                <p>We will provide most of the trending courses.</p>
              </div>
              <div class="column">
                <span class="fa fa-users" aria-hidden="true"></span>
                <a href="#">Expert Teachers</a>
                <p>Highly Qualified teachers are alotted in all available courses for your help.</p>
              </div>
              <div class="column">
                <span class="fa fa-smile-o" aria-hidden="true"></span>
                <a href="#">Communication</a>
                <p>We are provide a facility to communicate between the student and teacher.</p>
              </div>
              <div class="column">
                <span class="fa fa-history" aria-hidden="true"></span>
                <a href="#">Large Library</a>
                <p>We are provide most of the study meterials associated with your coureses.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 cwp23-img">
            <img src="assets/images/g6.jpg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="wthree-title">
          <div class="header-section text-center">
            <h3 class="mb-2">Meet Our Team</h3>
            <p></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mt-5" >
            <div class="box16"> 
              <a href="#url"><img src="profile-photo/ShyamM_2.jpg" alt="" class="img-fluid" style="height: 420px;"/></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Shyam</a></h3>
                <span class="post" style="font-weight:bold;font-style:italic">Chief Exective Officer</span>
                <ul class="social">
                  <li>
                    <a href="https://m.facebook.com/profile.php?id=100015297481418" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/_shya_m_ohan_/" class="twitter">
                      <span class="fa fa-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="profile-photo/IMG-20210227-WA0050[1].jpg" alt="" class="img-fluid" style="height: 420px;"/></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Peterson</a></h3>
                <span class="post" style="font-weight:bold;font-style:italic">Managing Director</span>
                <ul class="social">
                  <li>
                    <a href="https://www.facebook.com/peter.pv.984" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://instagram.com/peters_the_dubstep_trapper?utm_medium=copy_link" class="twitter">
                      <span class="fa fa-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="profile-photo/Screenshot_2021-02-27-09-11-16-42[1].jpg" alt="" class="img-fluid" style="height: 420px;"/></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Bitto</a></h3>
                <span class="post" style="font-weight:bold;font-style:italic">Chief Marketing Officer</a></span>
                <ul class="social">
                  <li>
                    <a href="https://www.facebook.com/bittomani.bitto" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://instagram.com/__boomeraaah__?utm_medium=copy_link" class="twitter">
                      <span class="fa fa-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team -->
  <section class="w3l-quote py-5" style="background-color: rgb(213, 249, 255);">
    <div class="container py-lg-3" >
      <h3>Want to Join?</h3>
      <p>You want to join as part of our MyGuru-online</p>
      <a href="facreg.php" class="btn btn-secondary theme-button">Become a Teacher</a>
      <a href="contact.php" class="btn btn-outline-secondary theme-button ml-2">know more</a>
    </div>
  </section>
  <section class="w3l-intro" id="intro">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <h2 class="mb-5">We are true to ourselves, and commit to always perform at our best.</h2>
            <a href="contact.php" class="btn btn-light theme-button py-2 px-5">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <?php include 'footer.php' ;?>
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
    $(document).ready(function () {
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
    $(document).ready(function () {
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
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

</body>

</html>