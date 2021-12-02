<?php require 'DBconnection.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
  <title>MyGuru-online</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <style type="text/css">
    .hide-scroll::-webkit-scrollbar {
      display: none;
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"></li>
                <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item ">
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
                <li class="nav-item ">
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
  <!--  Main banner section -->
  <section class="w3l-main-banner">
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="container">
          <div class="banner-item">
            <div class="banner-view">
              <div class="banner-info">
                <img src="assets/images/projectLOGO.png" alt="projectLOGO" style="width: 150px; height: 150px;">
                <h3 class="banner-text">
                  Learn Anytime, Anywhere.<br> Accelerate Your Future.
                </h3>
                <p class="my-4 mb-sm-5">We believe everyone has the capacity to be creative. MyGuru is a place
                  where people develop their own potential.
                </p><br>
                <a href="studreg.php" class="btn btn-primary theme-button mr-3">Register</a>
                <a href="courses.php" class="btn btn-outline-primary theme-button">Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Main banner section -->
  <section class="w3l-index5" id="about">
    <div class="new-block py-5">
      <div class="container py-lg-3">
        <div class="header-section text-center">
          <h3>How we Teach?</h3>
          <p class="mt-3 mb-5">We amplify important ideas in different field of study, to help teachers grow their practice
            in profession. And for students to improve their talents or knowledge through self learrning and build their carrier.
          </p>
        </div>
        <div class="list-single-view mt-5">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="grids5-info">
                <a href="#url" class="d-block zoom"><img src="assets/images/p1.jpg" alt="" class="img-fluid news-image" /></a>
                <div class="blog-info">
                  <p class="date">Step 01</p>
                  <h4>Join Community</h4>
                  <p class="blog-text"> First of all you have to join our community through the Registration as Student of a course or Faculty for a course. After the successfull registration you are become a part of our MyGuru-online course portal. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="list-single-view mt-3">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="grids5-info">
                <a href="#url" class="d-block zoom"><img src="assets/images/p2.jpg" alt="" class="img-fluid news-image" /></a>
                <div class="blog-info">
                  <p class="date">Step 02</p>
                  <h4>Start Learning</h4>
                  <p class="blog-text">After the registration, start your E-Learning by joining verity of Courses available in our site. We are provide all the required study meterials usefull for your E-learng. And you have provission to communicate with faculty for the purpose of doubt clarification. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="list-single-view mt-3">
          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="grids5-info">
                <a href="#url" class="d-block zoom"><img src="assets/images/p3.jpg" alt="" class="img-fluid news-image" /></a>
                <div class="blog-info">
                  <p class="date">Step 03</p>
                  <h4>Build carrier</h4>
                  <p class="blog-text">Buid your carrier with the help of this site. We amplify your teaching skills and grow their practice in profession. And also students have a best oppertunity to improve knowledge
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- stats -->
  <section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
      <div class="row stats-con text-white container">
        <div class="col-md-3 col-6 stats_info counter_grid">
          <span class="fa fa-smile-o"></span>
          <p class="counter"><?php
                              $sql = "select count(*) from `course` where `status` in ('Approved','completed','Ongoing');";
                              $res = mysqli_query($conn, $sql);
                              $row = mysqli_fetch_row($res);
                              echo $row[0];
                              ?></p>
          <h4>Certified Courses</h4>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid1">
          <span class="fa fa-graduation-cap"></span>
          <p class="counter"><?php
                              $sql = "select count(*) from `faculty` where `status`='Approved';";
                              $res = mysqli_query($conn, $sql);
                              $row = mysqli_fetch_row($res);
                              echo $row[0];
                              ?></p>
          <h4>Certified Teachers</h4>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
          <span class="fa fa-history"></span>
          <p class="counter"><?php
                              $sql = "select count(*) from `subscribers`;";
                              $res = mysqli_query($conn, $sql);
                              $row = mysqli_fetch_row($res);
                              echo $row[0];
                              ?></p>
          <h4>No: of Subscribers</h4>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
          <span class="fa fa-users"></span>
          <p class="counter"><?php
                              $sql = "select count(*) from `student`;";
                              $res = mysqli_query($conn, $sql);
                              $row = mysqli_fetch_row($res);
                              echo $row[0];
                              $tscount=$row[0];
                              ?></p>
          <h4>Students Enrolled</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!--  servcies section -->
  <div class="w3l-services1 pt-5" id="services">
    <div class="container pt-lg-3">
      <div class="header-section text-center">
        <h3>Achieve your gols with MyGuru<sub style="font-size: large;color:orangered">online</sub></h3>
        <p class="mt-3 mb-5">if you have a life that is crazy-busy, your are the only one who can determine when,where and how much time you devote to your courses and reaching your goal. Good time management is essential to this process, and the benifits are clear:You decide what your goal is, which courses to take, and how many of them.</p>
      </div>
      <div class="aboutgrids row">
        <div class="col-lg-6 aboutgrid2">
          <img src="assets/images/g1.jpeg" alt="about image" class="img-fluid" />
        </div>
        <div class="col-lg-6 aboutgrid1 my-lg-0 my-5">
          <h4>Having fun while learning is possible</h4>
          <p>Fun has a positive effect on motivation levels,determining what we learn and how much we retain. Learning is't a one-off event. It requres repetition and dedication.</p>
          <ul class="services-list mt-4">
            <li>World-wide learning class for anyone, Anywhere</li>
            <li>Learn the latest trending Courses</li>
            <li>Highly Qualified Teachers</li>
            <li>Get the life time valid certificate</li>
          </ul>

          <a href="contact.php" class="btn btn-outline-secondary theme-button">Know More</a>
        </div>
      </div>
    </div>

    <div class="aboutbottom py-5">
      <div class="container py-lg-3">
        <div class="bottomgrids row no-gutters">
          <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0">
            <span class="fa fa-phone"></span>
            <h4><a class="service-title" href="#url">Query-feedback Support</a></h4>
            <p class="service-text">We can help you for resolve your confusions at any time. We have a efficive Querry/Feedback facility for the student teacher communication.</p>
          </div>
          <div class="col-lg-4 col-md-6 bottomgrid1 mt-md-0 mt-5">
            <span class="fa fa-users"></span>
            <h4><a class="service-title" href="#url">Highly Qualified Teachers</a></h4>
            <p class="service-text">We got a highly qualified teacher for your training. They will help you to improve your skills and knowledge.</p>
          </div>
          <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-5">
            <span class="fa fa-laptop"></span>
            <h4><a class="service-title" href="#url">Learn Courses Online</a></h4>
            <p class="service-text">It is a world wide learning platform. So you have to learn your intresting subject in any time any where.</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--  //servcies section -->
  <section class="w3l-courses">
    <div class="blog py-5" id="courses">
      <div class="container py-lg-5">
        <div class="header-section text-center">
          <h3 class="mb-2">Trending courses</h3>
        </div>

        <div class="row mt-md-5 mt-4">
          <div class="col-md-12 mx-auto">
            <div class="owl-two owl-carousel owl-theme">
              <?php
              include 'DBconnection.php';
              $sql = "select `cname`,count(*) from `register` group by `cname` order by count(*) desc;";
              $res = mysqli_query($conn, $sql);
              $i=0;
              while ($row = mysqli_fetch_assoc($res))
              {
                $i=$i+1;
                $cnt=$row['count(*)'];
                $prcntg=floor(($cnt/$tscount)*100);
                if($i>5){break;}
                echo "
                <div class='item'>
                    <div class='card'>
                        <div class='card-header p-0 position-relative'>
                            <a href='#url' class='zoom d-block'>
                                <img class='card-img-bottom d-block' src='assets/images/c";echo $i;echo ".jpeg' alt='Card image cap'>
                            </a>
                            <div class='author'>
                                <div class='author-image'>
                                    <img src='";
                                    $sql0 = "select `img_path`,`fname`,`lname` from `faculty` where `email` in(select `teacher_email` from `course` where `title`='" . $row['cname'] . "');";
                                    $res0 = mysqli_query($conn, $sql0);
                                    $row0 = mysqli_fetch_row($res0);
                                    echo $row0[0];
                                    echo "' class='img-fluid rounded-circle' title='";echo $row0[1]," ",$row0[2];echo"' alt='author image' oncontextmenu='return false;'>
                                </div>
                                <div class='course-title'>
                                    <a href='#url'>";
                            echo $row['cname'];
                            echo "</a>
                                </div>
                            </div>
                        </div>
                        <div class='card-body course-details hide-scroll'  style='overflow:auto;height:200px;'>
                            <div class='price-review d-flex justify-content-between mb-1align-items-center'>
                                <p>";
                                $s=6-$i;
                                for($x=1;$x<=$s;$x++)
                                {
                                  echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star-fill' viewBox='0 0 16 16' style='color:orangered;'>
                                  <path d='M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'/>
                                </svg> ";
                                }
                            //echo $row['id'];
                            echo "</p>

                            </div>
                            <a href='#url' class='course-desc'>";
                            $sql1 = "select discription from `course` where `title`='" . $row['cname'] . "';";
                            $res1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_row($res1);
                            echo $row1[0];
                            echo "</a>
                        </div>
                        <div class='card-footer course-price-view'>
                            <ul class='blog-list'>
                                <li>
                                    <a href='#url'><span class='fa fa-heart'> ";
                            echo $prcntg;
                            echo "%</a>
                                </li>
                                <li>
                                    <a href='#url'><span class='fa fa-user'></span> ";
                            echo $cnt;
                            echo "</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>";
              }
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="w3l-get-started">
    <div class="new-block top-bottom">
      <div class="container">



        <div class="middle-section">
          <div class="section-width">
            <h2>Start your E-learning today with this professional online course portal.</h2>
          </div>
          <div class="link-list-menu">
            <p class="mb-5">Take the next step towards your personal and professional goals with MyGuru<sub style="font-size: small;">online</sub>.
              Join now to build your carrier in your proffession throgh this course portal.
            </p>
            <a href="about.php" class="btn btn-outline-light btn-more">About Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-subscribe">
    <div class="subscription-infhny">
      <div class="container-fluid">
        <div class="subscription-grids row" style="background-color: rgb(213, 249, 255);">
          <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
            <div class="px-lg-5 py-md-0 py-3">
              <div class="header-section">
                <h3>Join us for FREE to get instant <span>email updates!</span></h3>
                <p class="mt-3">Subscribe and get notified at first on the latest update and offers!</p>
              </div>
              <form action="" method="post" class="signin-form mt-lg-5 mt-4" autocomplete="off">
                <div class="forms-gds">
                  <div class="form-input">
                    <input type="email" name="email" placeholder="Your email here" required="">
                  </div>
                  <div class="form-input"><button class="btn btn-primary theme-button" name="submit">Subscribe</button></div>
                </div>
              </form>
            </div>
          </div>
          <div class="subscription-left forms-25-info col-lg-6 ">
          </div>
        </div>
      </div>
      <?php
      require 'DBconnection.php';
      if (isset($_POST['submit'])) {
        $mail = $_POST['email'];

        $sql0 = "select * from `subscribers` where `email` = '$mail';";
        $res0 = mysqli_query($conn, $sql0);
        if (mysqli_num_rows($res0) >= 1) 
        {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('You are already subscribed');
            window.location='$ret'</script>";
        }
        else
        {
          $sql = "insert into `subscribers`(`email`) values ('" . $mail . "');";
          $query = mysqli_query($conn, $sql);
          if ($query) {
            $ret = $_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Subscribed successfully');
                        window.location='$ret'</script>";
          } else {
            $ret = $_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Subscribation failed');
                        window.location='$ret'</script>";
          }
        }
      }
      ?>
  </section>
  <!-- footer -->
  <?php include 'footer.php'; ?>
  <!-- Footer -->

  <!-- jQuery and Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->


  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <!-- stats number counter-->
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

</body>

</html>