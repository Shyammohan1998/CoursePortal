<?php require 'DBconnection.php'; ?>
<?php
session_start();
if (isset($_SESSION['admin'])) {
  $fname = $_SESSION['admin']['Fname'];
  $lname = $_SESSION['admin']['Lname'];
  $dp = $_SESSION['admin']['Dp'];
  $email = $_SESSION['admin']['email'];
  $tablename = $_SESSION['admin']['user'];
} else {
  echo "<br><center><h2>Unautherized User. Access Denied.</h2></center>";
  die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
  <title>Admin</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="assets/css/style-signup.css" rel='stylesheet' type='text/css' media="all">
  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">

  <style type="text/css">
    @media (min-width: 1024px) {
      .mydiv {
        width: 70%;
      }
    }

    @media (min-width: 660px) {
      .mydiv {
        width: 80%;
      }
    }

    @media (min-width: 1140px) {
      .mydiv {
        width: 60%;
      }
    }
    .hide-scroll::-webkit-scrollbar
        {
            display: none;
        }

    .maininput
    {
      width: 70%;
      margin: 10px;
      border-radius: 5px;
    }
  </style>
  <style type="text/css">
    .progress .progress-bar {
      animation-name: animateBar;
      animation-iteration-count: 1;
      animation-timing-function: ease-in;
      animation-duration: .4s;
      background-color: orange;
      border-radius: 5px;
    }

    @keyframes animateBar {
      0% {
        transform: translateX(-100%);
      }

      100% {
        transform: translateX(0);
      }
    }
  </style>
</head>

<body onload="myfunction()" class="hide-scroll">

  <!--password reset popup-->
  <div class="modal fade" id="resetpassword" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Reset Your Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" autocomplete="off">
            <div class="form-group" style="text-align: center;">
              <input type="password" name="oldpswd" class="contact-input" placeholder="Old Password" required="" id="input" title="Enter Your Existing Password" />
              <input type="password" name="newpswd" class="contact-input" placeholder="New Password" required="" id="input" title="Enter New Password" />
              <input type="password" name="cnfmpswd" class="contact-input" placeholder="Confirm Password" required="" id="input" title="Re-Enter Password" />
              <button type="submit" id="input" class="btn btn-primary" name="passwordreset">Submit</button><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--password reset popup-->

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right hero-header-11" id="sidebar-wrapper">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">&nbsp;&nbsp;<img src="assets/images/logo-icon.png" alt="" /><b style="color: black;font-size: 25px;"> MyGuru</b><sub style="font-size: 15px; color:orangered;">online</sub></a>
      </nav>
      <div class="list-group container mt-3" id="toggle-close" style="text-align: center;">
        <center>
          <div style="width:190px ;height: 190px; border-radius: 50%; border: 2px solid orangered; padding: 3px;">
            <img class=" img-responsive" src="<?php echo $dp; ?>" alt="vannilla" style="width:180px ;height: 180px; border-radius: 50%;">
          </div>
        </center>
        <?php
        echo "$fname $lname";
        ?>
        <a href="#" class="mt-3 btn-outline-primary" onclick="s1Show();">Dashboard</a>
        <a href="#" class="btn-outline-primary" onclick="s2Show();">My Profile</a>
        <a href="#" class="btn-outline-primary" data-toggle="modal" data-target="#resetpassword">Reset Password</a>
        <a href="#" class="btn-outline-primary" onclick="s6Show();">Request</a>
        <a href="#" class="btn-outline-primary" onclick="s4Show();">Students</a>
        <a href="#" class="btn-outline-primary" onclick="s5Show();">Faculty</a>
        <a href="#" class="btn-outline-primary" onclick="s7Show();">Courses</a>
        <a href="#" class="btn-outline-primary" onclick="s3Show();">Add Admin</a>
        <a href="#" class="btn-outline-primary" onclick="s8Show();">Anouncement</a>
        <a href="#" class="btn-outline-primary" onclick="s9Show();">Feedbacks</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <header>
        <div class="navbar navbar-expand-lg navbar-light border-bottom col-md-12" id="navigation" style="position:fixed;background-color: aqua; top: opx;">
          <button class="btn toggle-btn navbar-brand" id="menu-toggle"><span class="navbar-toggler-icon"></span>&nbsp;<img src="assets/images/logo-icon.png" alt="" />MyGuru<sub style="font-size: 15px; color:orangered;">online</sub>
          </button>
          <div id="navig"><a href="logout.php" onclick="location.href=this.href+'?user='+'admin';return false;">LogOut</a></div>
        </div>
      </header>

      <div class="container" style="margin-top: 90px;">

        <!-- breadcrum -->
        <section class="w3l-skill-breadcrum">
          <div class="breadcrum">
            <div class="container">
              <p><a href="index.php">Home</a> &nbsp; / &nbsp; Admin</p>
            </div>
          </div>
        </section><br>
        <!-- breadcrum -->

        <section class=" my-stats py-lg-5 py-4 container" id="stats">
          <div class="gallery-inner container py-md-5 py-4">
            <div class="row stats-con text-white container">
              <div class="col-md-3 col-6 stats_info counter_grid">
                <span class="fa fa-smile-o"></span>
                <p class="counter" style="color: black;"><?php
                                                        $sql = "select count(*) from `course` where `status` in ('Approved','completed','Ongoing');";
                                                        $res = mysqli_query($conn, $sql);
                                                        $row = mysqli_fetch_row($res);
                                                        echo $row[0];
                                                        ?></p>
                <h4 style="color: black;">Certified Courses</h4>
              </div>
              <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-graduation-cap"></span>
                <p class="counter" style="color: black;"><?php
                                                        $sql = "select count(*) from `faculty` where `status`='Approved';";
                                                        $res = mysqli_query($conn, $sql);
                                                        $row = mysqli_fetch_row($res);
                                                        echo $row[0];
                                                        ?></p>
                <h4 style="color: black;">Certified Teachers</h4>
              </div>
              <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <span class="fa fa-history"></span>
                <p class="counter" style="color: black;"><?php
                                                          $sql = "select count(*) from `subscribers`;";
                                                          $res = mysqli_query($conn, $sql);
                                                          $row = mysqli_fetch_row($res);
                                                          echo $row[0];
                                                          ?></p>
                <h4 style="color: black;">No: of Subscribers</h4>
              </div>
              <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <span class="fa fa-users"></span>
                <p class="counter" style="color: black;"><?php
                                                          $sql = "select count(*) from `student`;";
                                                          $res = mysqli_query($conn, $sql);
                                                          $row = mysqli_fetch_row($res);
                                                          echo $row[0];
                                                          $tscount=$row[0];
                                                          ?></p>
                <h4 style="color: black;">Students Enrolled</h4>
              </div>
            </div>
          </div>
          <hr>
          <div class="container">
            <div class="container">
              <br>
              <?php 
                $sql = "select `cname`,count(*) from `register` group by `cname` order by count(*) desc;";
                $res = mysqli_query($conn, $sql);
                $i=0;
                while ($row = mysqli_fetch_assoc($res)) 
                {
                  $i=$i+1;
                  $cnt=$row['count(*)'];
                  $prcntg=floor(($cnt/$tscount)*100);
                  if($i>5){break;}
                  $cname=$row['cname'];
                  echo $row['cname'];
                  echo"<div class='progress'>
                    <div class='progress-bar progress-bar-success' style='width:";echo $prcntg;echo "%;'>";echo $prcntg;echo "%</div>
                    </div>";
                  
                  //$sql.$i = "update trending set `cname`='" . $cname . "',`count`='" . $cnt . "',`rating`= '" . $prcntg . "' where `id`='" . $i . "';";
                  //$res = mysqli_query($conn, $sql.$i);
                }
              ?>
            </div>
          </div>
        </section><br>

        <section id="s2" style="display: none;">
          <div class="container" style=" border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
            <center>
              <div style="width:190px ;height: 100px; border-radius: 50%;  padding: 3px;">
                <div style="width:190px ;height: 190px; border-radius: 50%; border: 2px solid orangered; padding: 3px;">
                  <img class=" img-responsive" src="<?php echo $dp; ?>" alt="vannilla" style="width:180px ;height: 180px; border-radius: 50%;">
                </div>
              </div>
              <div class="mydiv">
                <div class="contacts12-main" style="background-color:white; border:2px solid orangered; border-radius:20px; padding-top:80px;"><br>
                  <h3 style="font-size: xx-large;"><?php echo "$fname $lname"; ?></h3><br>
                  <center>
                    <?php
                    require 'MyProfile.php';
                    ?></center><br>
                  <button class=" btn btn-primary" data-toggle="modal" data-target="#profileupdate">Update Profile</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class=" btn btn-primary" data-toggle="modal" data-target="#photoupdate">Update Photo</button><br><br>
                </div><br>
              </div>
          </div><br>
        </section>

        <section id="s3" style="display: none;">
          <div class="container" style=" border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br><br>
            <div class="hotel-bothside">
              <div class="header-section text-center"><br>
                <h3 class="mb-md-5 mb-4">Add New Admin</h3>
              </div>
              <form action="" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validate();">

                <div class="mid-cls">

                  <div class="hotel-left-w3ls">

                    <div class="form-add-to-w3ls add">

                      <input type="text" name="fname" placeholder="First Name" required="" autocomplete="none">
                      <div class="clear"></div>
                    </div>
                    <div class="form-add-to-w3ls add">

                      <input type="text" name="lname" placeholder="Last Name" required="" autocomplete="none">
                      <div class="clear"></div>
                    </div>

                  </div>

                  <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">

                      <select class="form-control buttom" required="" name="gender">
                        <option value="" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>

                      </select>
                    </div>
                    <div class="form-add-to-w3ls add">
                      <div class="form-left-to-w3l">
                        <input type="text" name="dob" placeholder="Date Of Birth" required="" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-control-w3l">
                  <textarea name="address" placeholder="Your Full Address" required="" autocomplete="none"></textarea>
                  <div class="clear"></div>
                </div>
                <div class="mid-cls">
                  <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                      <input type="tel" name="mobileno" placeholder="Mobile : +XX XXXXXXXXXX" pattern="[+][0-9]{2} [0-9]{10}" required="" autocomplete="none">
                      <div class="clear"></div>
                    </div>
                  </div>
                  <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">
                      <div class="form-left-to-w3l">
                        <input type="text" name="fileImg" placeholder="profile photo" onfocus="(this.type='file')" title="please add profile phicture">
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-add-to-w3ls add">
                  <input type="email" name="email" placeholder="Email Address" required="" title="This Email-Id as your Username">
                  <div class="clear"></div>
                </div>
                <div class="mid-cls">
                  <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                      <input type="password" id="pswd" name="password" placeholder="password" required="" title="Please set your Login password">
                      <div class="clear"></div>
                    </div>
                  </div>
                  <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">
                      <div class="form-left-to-w3l">
                        <input type="password" id="cnfmpswd" placeholder="Confirm Password" required="" title="Re-enter your password for confirm">
                        <div class="clear"></div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="mid-cls">
                  <div class="hotel-left-w3ls">

                  </div>
                  <div class="hotel-right-w3ls">
                    <div class="main">
                      <div class="form-left-to-w3l">
                        <div class="bttn">
                          <button type="reset" class="btn btn-primary">Clear</button>
                        </div>
                        <div class="clear"></div>
                      </div>
                      <div class="form-left-to-w3l">
                        <div class="bttn">
                          <button type="submit" class="btn btn-primary" name="adminsubmit">Submit</button>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div><br><br>
          </div><br>

          <?php
          require 'DBconnection.php';
          if (isset($_POST['adminsubmit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $mobileno = $_POST['mobileno'];
            $email = $_POST['email'];
            $passcode = $_POST['password'];

            if ($_FILES['fileImg']['size'] == 0 && $_FILES['fileImg']['error'] == 0) {
              $image_name = $fname;
              $file_path = "profile-photo/user.jpg";
              $sql = "insert into `admin`(`fname`,`lname`,`gender`,`dob`,`address`,`mobile`,`email`,`password`,`img_name`,`img_path`) values ('" . $fname . "','" . $lname . "','" . $gender . "','" . $dob . "','" . $address . "','" . $mobileno . "','" . $email . "','" . $passcode . "','" . $image_name . "','" . $file_path . "');";
              $query = mysqli_query($conn, $sql);
            } else {
              $file_tmp = $_FILES["fileImg"]["tmp_name"];
              $file_name = $_FILES["fileImg"]["name"];
              $image_name = $fname;
              $file_path = "profile-photo/" . $file_name;
              if (file_exists($file_path)) {
                $ret = $_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Sorry! $file_name image is alreadyexist.');
                window.location='$ret'</script>";
              } else {
                $sql = "insert into `admin`(`fname`,`lname`,`gender`,`dob`,`address`,`mobile`,`email`,`password`,`img_name`,`img_path`) values ('" . $fname . "','" . $lname . "','" . $gender . "','" . $dob . "','" . $address . "','" . $mobileno . "','" . $email . "','" . $passcode . "','" . $image_name . "','" . $file_path . "');";
                $query = mysqli_query($conn, $sql);
                move_uploaded_file($file_tmp, $file_path);
              }
            }
            if (!$query) {
              $ret = $_SERVER['HTTP_REFERER'];
              echo "<script type='text/javascript'>alert('Registration Failed');
                window.location='$ret'</script>";
            } else {
              $ret = $_SERVER['HTTP_REFERER'];
              echo "<script type='text/javascript'>alert('New Admin Added');
              window.location='$ret'</script>";
            }
          }
          ?>

        </section>

        <section id="s4" style="display: none;">
          <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
            <div style="font-size:xx-large; padding-top:15px; padding-bottom:10px">Students Details</div>
            <input type="search" id="myInput1" placeholder="Search..." class="form-control" >
            <div class="table-responsive ">
              <?php
              $sql = "select * from `student` order by `fname` asc;";
              $res = mysqli_query($conn, $sql);
              $f = false;
              if (mysqli_num_rows($res) >= 1) {
                $f = true;
                echo "
                    <table class='table table-hover' id='myTable1'>
                    <thead class='thead-light'>
                      <tr style='font-weight: bold;'>
                        <td>No</td>
                        <td>Name</td>
                        <td>Gender</td>
                        <td>DOB</td>
                        <td>Address</td>
                        <td>Mobile no</td>
                        <td>Email</td>
                        <td></td>
                      </tr>
                    <thead>
                    <tbody>";
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
                  echo "<tr>
                        <td>" . $i . "</td>
                        <td>" . $row['fname'] . " " . $row['lname'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>" . $row['dob'] . "</td>
                        <td>" . $row['address'] . "</td>
                        <td>" . $row['mobile'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['email'] . "&table=student&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                      </tr>";
                  $i = $i + 1;
                }
                echo "</tbody>
                  </table>";
              }
              if (!$f) {
                echo "No Student Records Available";
              }
              ?>
            </div>
          </div><br>
        </section>

        <section id="s5" style="display: none;">
          <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
            <div style="font-size:xx-large; padding-top:15px; padding-bottom:10px">Faculty Details</div>
            <input type="search" id="myInput2" placeholder="Search..." class="form-control" >
            <div class="table-responsive ">
              <?php
              $sql = "select * from `faculty` where `status`='Approved' order by `fname` asc;";
              $res = mysqli_query($conn, $sql);
              $f = false;
              if (mysqli_num_rows($res) >= 1) {
                $f = true;
                echo "
                    <table class='table table-hover' id='myTable2'>
                    <thead class='thead-light'>
                      <tr style='font-weight: bold;'>
                        <td>No</td>
                        <td>Name</td>
                        <td>Gender</td>
                        <td>DOB</td>
                        <td>Address</td>
                        <td>Mobile no</td>
                        <td>Email</td>
                        <td></td>
                      </tr>
                    <thead>
                    <tbody>";
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
                  echo "<tr>
                        <td>" . $i . "</td>
                        <td>" . $row['fname'] . " " . $row['lname'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>" . $row['dob'] . "</td>
                        <td>" . $row['address'] . "</td>
                        <td>" . $row['mobile'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['email'] . "&table=faculty&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                      </tr>";
                  $i = $i + 1;
                }
                echo "</tbody>
                  </table>";
              }
              if (!$f) {
                echo "No Faculty Records Available";
              }
              ?>
            </div>
          </div><br>
        </section>

        <section id="s6" style="display: none;">
          <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
            <div style="font-size:xx-large; padding-top:15px; padding-bottom:10px">Request</div>

            <?php
            //require 'DBconnection.php';
            $sql1 = "select * from `faculty` where `status`='Requested';";
            $sql2 = "select * from `course` where `status`='Requested';";
            $res1 = mysqli_query($conn, $sql1);
            $res2 = mysqli_query($conn, $sql2);
            $f = false;
            if (mysqli_num_rows($res1) >= 1) {
              $f = true;
              echo "<p style='font-weight: bold; text-align:left; margin-bottom:10px; margin-top:10px;'>Faculty Request</p>
                  <div class='table-responsive'>
                    <table class='table table-hover'>
                      <thead class='thead-light'>
                        <tr style='font-weight: bold;'>
                          <td>No</td>
                          <td>Name</td>
                          <td>Gender</td>
                          <td>DOB</td>
                          <td>Address</td>
                          <td>Mobile no</td>
                          <td>Email</td>
                          <td>Resume</td>
                          <td></td>
                          <td></td>
                        </tr>
                      <thead>
                      <tbody>";
              $i = 1;
              while ($row = mysqli_fetch_assoc($res1)) {
                echo "<tr>
                    <td>" . $i . "</td>
                    <td>" . $row['fname'] . " " . $row['lname'] . "</td>
                    <td>" . $row['gender'] . "</td>
                    <td>" . $row['dob'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>" . $row['mobile'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td><a href=\"download.php?file=" . $row['resume'] . "\" style='color:blue;' title='Download'>" . $row['resume'] . "</a></td>
                    <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['email'] . "&table=faculty&action=update\" class='btn btn-outline-primary'>Aprove</a></td>
                    <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['email'] . "&table=faculty&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                  </tr>";
                $i = $i + 1;
              }
              echo "</tbody>
                  </table>
                  </div><hr>";
            }
            if (mysqli_num_rows($res2) >= 1) {
              $f = true;
              echo "<p style='font-weight: bold; text-align:left; margin-bottom:10px;'>Course Request</p>
                  <div class='table-responsive'>
                    <table class='table table-hover'>
                      <thead class='thead-light'>
                        <tr style='font-weight: bold;'>
                          <td>No</td>
                          <td>Title</td>
                          <td>Discription</td>
                          <td>Teacher name</td>
                          <td>Teacher Email</td>
                          <td></td>
                          <td></td>
                        </tr>
                      <thead>
                      <tbody>";
              $i = 1;
              while ($row = mysqli_fetch_assoc($res2)) {
                echo "<tr>
                    <td>" . $i . "</td>
                    <td>" . $row['title'] . "</td>
                    <td>" . $row['discription'] . "</td>
                    <td>" . $row['teacher_name'] . "</td>
                    <td>" . $row['teacher_email'] . "</td>
                    <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['teacher_email'] . "&table=course&action=update\" class='btn btn-outline-primary'>Aprove</a></td>
                    <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['teacher_email'] . "&table=course&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                  </tr>";
                $i = $i + 1;
              }
              echo "</tbody>
                  </table>
                  </div>";
            }
            if (!$f) {
              echo "No Requests are Available";
            }
            ?>
      
          </div><br>
        </section><br>

        <section id="s7" style="display: none;">
          <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
            <div style="font-size:xx-large; padding-top:15px; padding-bottom:10px">Course Details</div>
            <input type="search" id="myInput3" placeholder="Search..." class="form-control" >
            <div class="table-responsive ">
              <?php
              $sql = "select * from `course` where `status` in ('Approved','completed','Ongoing') order by `title` asc;";
              $res = mysqli_query($conn, $sql);
              $f = false;
              if (mysqli_num_rows($res) >= 1) {
                $f = true;
                echo "
                    <table class='table table-hover' id='myTable3'>
                    <thead class='thead-light'>
                      <tr style='font-weight: bold;'>
                        <td>No</td>
                        <td>Title</td>
                        <td>Discription</td>
                        <td>Teacher name</td>
                        <td>Teacher Email</td>
                        <td>Status</td>
                        <td></td>
                      </tr>
                    <thead>
                    <tbody>";
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
                  echo "<tr>
                        <td>" . $i . "</td>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['discription'] . "</td>
                        <td>" . $row['teacher_name'] . "</td>
                        <td>" . $row['teacher_email'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td><a href=\"dml.php?id=" . $row['id'] . "&mail=" . $row['teacher_email'] . "&table=course&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                      </tr>";
                  $i = $i + 1;
                }
                echo "</tbody>
                  </table>";
              }
              if (!$f) {
                echo "No Corse Records Available";
              }
              ?>
            </div>
          </div><br>
        </section>

        <section  id="s8" style="display: none;">
          <div class="container">
            <div class="container" style="padding-left:10px; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
              <div class="header-section text-center">
                <button class='btn btn-primary'  style='float:right;margin-right:45px;margin-top:10px;' title='New announcement' onclick="d1Show();">New</button>
                <h3 style='float:center;color:black;margin-left:20px;'>Announcement</h3><br>
              </div>
              <div style="display: none;" id="d1">
                <form action="" method="post" class="" autocomplete="off">
                  <center>
                    <input type="text" name="name" placeholder="Enter your name" value="Admin" class="maininput" required="" style="height: 48px;"/><br>
                    <input type="email" name="sender" placeholder="Enter your mail" value="<?php echo $email; ?>" class="maininput" required="" style="height: 48px;"/><br>
                    
                    <textarea class=" maininput" name="message" placeholder="Enter your message"
                        required="" style="height:100px;"></textarea>
                  </center>
                  <div class="text-right" style="padding-right: 15%;padding-top: 10px;">
                    <button class="btn-primary btn " type="reset" style="width:25%;">Clear</button>
                    <button class="btn-primary btn " type="submit" name="anouncement" style="width:25%;">Send</button>
                  </div><br>
                </form>
              </div>
              
              <?php
                echo "<div class='table-responsive container text-center'>";
                $sql = "select * from `anouncement` where `senderemail` = '$email' order by `id` desc;";
                $res = mysqli_query($conn, $sql);
                $f = false;
                if (mysqli_num_rows($res) >= 1) 
                {
                  $f = true;
                  echo "<hr>
                    <table class='table table-hover'>
                    <thead class='thead-light'>
                      <tr style='font-weight: bold;'>
                        <td>No</td>
                        <td>Sender</td>
                        <td>Message</td>
                        <td>Date</td>
                        <td></td>
                      </tr>
                    <thead>
                    <tbody>";
                  $i = 1;
                  while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>
                      <td>" . $i . "</td>
                      <td>" . $row['sendername'] . "</td>
                      <td>" . $row['message'] . "</td>
                      <td>" . $row['date'] . "</td>
                      <td><a href=\"dml.php?id=" . $row['id'] . "&table=anouncement&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                    </tr>";
                    $i = $i + 1;
                  }
                  echo "</tbody>
                  </table>";
                }
                if (!$f) 
                {
                  echo "No Records Available";
                }
              ?>
            </div><br>
          </div>
        </section>
        
        <section class="container" id="s9" style="display: none;">
            <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
              <div style="font-size:xx-large; padding-top:15px; padding-bottom:10px">Feedbacks</div>
              <input type="search" id="myInput4" placeholder="Search..." class="form-control" >
                <div class='table-responsive'>
                    <?php
                        $sql = "select * from `feedback` order by `id` desc;";
                        $res = mysqli_query($conn, $sql);
                        $f = false;
                        if (mysqli_num_rows($res) >= 1) {
                          $f = true;
                          echo "
                              <table class='table table-hover' id='myTable4'>
                              <thead class='thead-light'>
                                <tr style='font-weight: bold;'>
                                <td>No</td>
                                <td>Send From</td>
                                <td>Sender Email</td>
                                <td>Subject</td>
                                <td>Message</td>
                                </tr>
                              <thead>
                              <tbody>";
                          $i = 1;
                          while ($row = mysqli_fetch_assoc($res)) {
                            echo "<tr>
                                    <td>" . $i . "</td>
                                    <td>" . $row['sendername'] . "</td>
                                    <td>" . $row['senderemail'] . "</td>
                                    <td>" . $row['subject'] . "</td>
                                    <td>" . $row['message'] . "</td>
                                  </tr>";
                            $i = $i + 1;
                          }
                          echo "</tbody>
                            </table>";
                        }
                        if (!$f) {
                          echo "No Corse Records Available";
                        }
                    ?>
                </div>
            </div><br>
        </section>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>


    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script>
      function myfunction() {
        var x = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        //alert(x)
        if (x < 900) {
          $("#toggle-close").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
          });
        }
      }
    </script>
    <script type="text/javascript">
      function s1Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s1.style.display == "none") {
          s1.style.display = "block";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";
        }
      }

      function s2Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s2.style.display == "none") {
          s2.style.display = "block";
          s1.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";
        }
      }

      function s3Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s3.style.display == "none") {
          s3.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";
        }
      }

      function s4Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s4.style.display == "none") {
          s4.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";
        }
      }

      function s5Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s5.style.display == "none") {
          s5.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";
        }
      }

      function s6Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s6.style.display == "none") {
          s6.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";
        }
      }

      function s7Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s7.style.display == "none") {
          s7.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s8.style.display = "none";
          s9.style.display = "none";

        }
      }

      function s8Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s8.style.display == "none") {
          s8.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s9.style.display = "none";

        }
      }

      function s9Show() {
        //alert("clicked");
        var s1 = document.getElementById("stats");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var s6 = document.getElementById("s6");
        var s7 = document.getElementById("s7");
        var s8 = document.getElementById("s8");
        var s9 = document.getElementById("s9");
        if (s9.style.display == "none") {
          s9.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          s6.style.display = "none";
          s7.style.display = "none";
          s8.style.display = "none";

        }
      }

      function d1Show() {
      //alert("clicked");
      var x = document.getElementById("d1");
      if (x.style.display == "none") {
        x.style.display = "block";
      } 
      else 
      {
        x.style.display = "none";
      }
      
    }
    </script>

    <script>
      $(document).ready(function() {
      $("#myInput1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(document).ready(function() {
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(document).ready(function() {
      $("#myInput3").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable3 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(document).ready(function() {
      $("#myInput4").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable4 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

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
if (isset($_POST['passwordreset'])) {
  $oldpswd = $_POST['oldpswd'];
  $newpswd = $_POST['newpswd'];
  $cnfmpswd = $_POST['cnfmpswd'];
  $sql = "select * from $tablename where email='" . $email . "';";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_row($res);
  if ($oldpswd == $row[8]) {
    if ($newpswd == $cnfmpswd) {
      $sql = "update $tablename set `password`='" . $newpswd . "' where `id`=$row[0];";
      $query = mysqli_query($conn, $sql);
      if (!$query) {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Updation Failed');
                      window.location='$ret'</script>";
      } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('password reseted');
                      window.location='$ret'</script>";
      }
    } else {
      $ret = $_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('Password Mismatch');
                window.location='$ret'</script>";
    }
  } else {
    $ret = $_SERVER['HTTP_REFERER'];
    echo "<script type='text/javascript'>alert('Existing Password is wrong');
                window.location='$ret'</script>";
  }
}
?>

<?php
if (isset($_POST['anouncement'])) 
{
  $name = $_POST['name'];
  $sender = $_POST['sender'];
  $message = $_POST['message'];
  //$subject = "";
  $dt = date("d-m-y");
  $sql = "insert into `anouncement`(`sendername`,`senderemail`,`message`,`date`) values ('".$name."','".$sender."','".$message."','".$dt."');";
  $query = mysqli_query($conn, $sql);
  if ($query) 
  {
    $sql0 = "select * from `subscribers`;";
    $res0 = mysqli_query($conn, $sql0);
    while($row0=mysqli_fetch_array($res0))
    {
      $adrs[]=$row0['email'];
    }
    $to=implode(",",$adrs);
    $sub = "Greeting from MyGuru-Online";
    $headers = "From: MyGuru\-online ";
    $body = "Dear Subscriber,
    \n\t".$message."
            
    \n\n*** This is System generated Email.please do not reply to it ***";
    if (mail($to, $sub, $body, $headers)) 
    {
      $ret=$_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('Announcement Success');
        window.location='$ret'</script>";
    } 
    else 
    {
      $ret=$_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('Announcement Success. But mail not Sent');
      window.location='$ret'</script>";
    }
  } 
  else 
  {
    $ret=$_SERVER['HTTP_REFERER'];
    echo "<script type='text/javascript'>alert('Announcement failed');
        window.location='$ret'</script>";
  }
  
}
?>