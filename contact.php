<?php include 'DBconnection.php' ;?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
  <title>ContactUs</title>

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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
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
        <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
      </div>
    </div>
  </section>
  <!-- //breadcrum -->
  <!-- contact form -->
  <section class="w3l-contacts-12" id="contact">
    <div class="container py-5" >
      <div class="contacts12-main py-md-3" style="background-color: aqua;border-radius: 20px; width: 90%; padding: 30px;" >
        <div class="header-section text-center"><br>
          <h3 class="mb-md-5 mb-4">Fill out the form</h3>
        </div>
        <form action="" method="post" class="" autocomplete="off">
          <div class="main-input">
            <input type="text" name="name" placeholder="Enter your name" class="contact-input" required=""/>
            <input type="email" name="sender" placeholder="Enter your mail" class="contact-input" required=""/>
            <input type="text" name="subject" placeholder="Subject" class="contact-input"/>
            <textarea class="contact-textarea contact-input" name="message" placeholder="Enter your message"
              required=""></textarea>
          </div>
          <div class="text-right">
            <button class="btn-primary btn theme-button" type="submit" name="feedback">Send</button>
          </div>
        </form><br>
      </div>
    </div>
    <div class="contant11-top-bg py-5" style="background-color: rgb(213, 249, 255);">
      <div class="container py-lg-3">
        <div class="d-grid contact section-gap">
          <div class="contact-info-left d-grid">
            <div class="contact-info" style="background-color: antiquewhite;">
              <div class="icon">
                <span class="fa fa-location-arrow" aria-hidden="true"></span>
              </div>
              <div class="contact-details">
                <h4><b> Address:</b></h4>
                <p>Thirunakkara Temple road, Kottayam, Kerala</p>
              </div>
            </div>
            <div class="contact-info" style="background-color: antiquewhite;">
              <div class="icon">
                <span class="fa fa-phone" aria-hidden="true"></span>
              </div>
              <div class="contact-details">
                <h4><b>Phone:</b></h4>
                <p><a href="tel:+91 7909232372">+91 7909232372</a></p>
                <p><a href="tel:+91 8547540739">+91 8547540739</a></p>
              </div>
            </div>
            <div class="contact-info" style="background-color: antiquewhite;">
              <div class="icon">
                <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
              </div>
              <div class="contact-details">
                <h4><b>Mail:</b></h4>
                <p><a href="mailto:mail@example.com" class="email">myguruonline@gmail.com</a></p>
                <p><a href="mailto:mail@example.com" class="email">shyammohan141298@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- //contact form -->
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

<?php
if (isset($_POST['feedback'])) 
{
  $name = $_POST['name'];
  $sender = $_POST['sender'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $sql = "insert into `feedback`(`sendername`,`senderemail`,`subject`,`message`) values ('".$name."','".$sender."','".$subject."','".$message."');";
  $query = mysqli_query($conn, $sql);
  if ($query) 
  {
    $ret=$_SERVER['HTTP_REFERER'];
    echo "<script type='text/javascript'>alert('Submission Successfull');
        window.location='$ret'</script>";
  } 
  else 
  {
    $ret=$_SERVER['HTTP_REFERER'];
    echo "<script type='text/javascript'>alert('Submission Fail');
        window.location='$ret'</script>";
  }
  
}
?>