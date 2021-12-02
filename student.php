<?php require 'DBconnection.php'; ?>
<?php
session_start();
if (isset($_SESSION['student'])) {
  $fname = $_SESSION['student']['Fname'];
  $lname = $_SESSION['student']['Lname'];
  $dp = $_SESSION['student']['Dp'];
  $email = $_SESSION['student']['email'];
  $tablename = $_SESSION['student']['user'];
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
  <title>Student</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

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

    .my {
      background-color: transparent;
      border-color: transparent;

    }

    .my:hover {
      background-color: transparent;
      border-color: white;

    }

    .specialbutton {
      background-color: transparent;
      border-color: transparent;
      width: 100%;
      padding: 5px;
    }

    .specialbutton:hover {
      background-color: transparent;
      border-color: white;

    }

    .img1 {
      float: left;
      border: 3px solid #dedede;
      max-width: 60px;
      width: 100%;
      height: 60px;
      border-color: #ccc;
      margin-left: 30px;
      border-radius: 50%;
    }

    .hide-scroll::-webkit-scrollbar {
      display: none;
    }

    .maininput
    {
      width: 70%;
      height: 50px;
      margin: 10px;
      border-radius: 5px;
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

  <?php 
  //notification check
  $acount=0;
  $sql5 = "select * from `chat` where `recieverid`='$email';";
  $res5 = mysqli_query($conn, $sql5);
  while ($row5 = mysqli_fetch_assoc($res5))
  {   
      if($row5['status'] == ''){$acount=$acount+1;}
  }
  //notification check
  ?>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right hero-header-11" id="sidebar-wrapper">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">&nbsp;&nbsp;<img src="assets/images/logo-icon.png" alt="" /><b style="color: black;font-size: 25px;"> MyGuru</b><sub style="font-size: 15px; color:orangered;">online</sub></a>
      </nav>
      <div class="list-group container mt-3" id="toggle-close" style="text-align: center;">
        <center>
          <div style="width:190px ;height: 190px; border-radius: 50%; border: 2px solid orangered; padding: 3px;"><img class=" img-responsive" src="<?php echo $dp; ?>" alt="vannilla" style="width:180px ;height: 180px; border-radius: 50%;"></div>
        </center>
        <?php
        echo "$fname $lname";
        ?>
        <a href="#" class="mt-3 btn-outline-primary" onclick="s1Show();">Dashbord</a>
        <a href="#" class="btn-outline-primary" onclick="s2Show();">My Profile</a>
        <a href="#" class="btn-outline-primary" data-toggle="modal" data-target="#resetpassword">Password Reset</a>
        <a href="#" class="btn-outline-primary" onclick="s3Show();">Querry/Response
        <?php 
            if($acount > 0)
            {
                echo "<span class='badge rounded-pill bg-primary' style='color:black;'>",$acount,"</span>";
            }
          ?>  
        </a>
        <a href="#" class="btn-outline-primary" onclick="s5Show();">Anouncement</a>
        <a href="#" class="btn-outline-primary" onclick="s6Show();">Feedback</a>
        <a href="#" class="btn-outline-primary" onclick="s4Show();">Quiz</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <header>
        <div class="navbar navbar-expand-lg navbar-light border-bottom col-md-12" id="navigation" style="position:fixed;background-color: aqua; top: opx;">
          <button class="btn toggle-btn navbar-brand" id="menu-toggle"><span class="navbar-toggler-icon"></span>&nbsp;<img src="assets/images/logo-icon.png" alt="" />MyGuru<sub style="font-size: 15px; color:orangered;">online</sub>
          </button>
          <button class="btn" id="navig"><a href="logout.php" onclick="location.href=this.href+'?user='+'student';return false;">LogOut</a></button>

        </div>

      </header>

      <div class="container" style="margin-top: 90px;">

        <!-- breadcrum -->
        <section class="w3l-skill-breadcrum">
          <div class="breadcrum">
            <div class="container">
              <p><a href="index.php">Home</a> &nbsp; / &nbsp; Student</p>
            </div>
          </div>
        </section><br>
        <!-- breadcrum -->

        <section id="s1" class="container">
          <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
            <h1>My Courses</h1>
            <?php
            $sql = "select * from `course` where `title` in (select `cname` from `register` where `semail`='$email');";
            $res = mysqli_query($conn, $sql);
            //if (!$res) {echo "nadannilla";}
            $f = false;
            $courses = array();
            if (mysqli_num_rows($res) >= 1) {
              $f = true;
              echo "<form action='' method='post'><ul>";
              while ($row = mysqli_fetch_assoc($res)) {
                echo "<li><button class='my' name='cid' value=";
                echo $row['id'];
                echo "><h6>";
                echo $row['title'];
                echo "</h6></button></li>";
                $courses[] = $row['title'];
              }
              echo "</ul></form>";
            }
            if (!$f) {
              echo "No Courses are Available";
            }
            ?><br>
            <button onclick="d1Show();" class="btn btn-primary">Join New Course</button><br><br>
          </div>
          
          <!--mycourse-->
          <?php
          if (isset($_POST['cid'])) {
            echo "<div id='mc' class='container' style='margin-top:5px;text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef'>";
            $id = $_POST['cid'];
            $sql = "select * from `course` where `id`='" . $id . "';";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($res);
            if (mysqli_num_rows($res) == 1) {
              echo "<center><div class='mydiv'><div class='contacts12-main' style='border-radius:20px; margin-top:20px;margin-bottom:20px;'>";
              echo "<center><h1>$row[1]</h1>";
              echo "<br>$row[2]<br>";
              echo "<table class='table1'>
                            <tr  class='tr'>
                                <td class='tdl'>Duration</td>
                                <td class='tdr'>$row[6]</td>
                            </tr>
                            <tr  class='tr'>
                                <td class='tdl'>Teacher Name</td>
                                <td class='tdr'>$row[3]</td>
                            </tr>
                            <tr  class='tr'>
                                <td class='tdl'>Teacher Email</td>
                                <td class='tdr'>$row[4]</td>
                            </tr>
                            <tr  class='tr'>
                                <td class='tdl'>Status</td>
                                <td class='tdr'>$row[5]</td>
                            </tr>
                            
                        </table>";
              $sql0 = "select count(*) from `scoreboard` where `course`='$row[1]' and `email`='$email';";
              $res0 = mysqli_query($conn, $sql0);
              $row0 = mysqli_fetch_row($res0);
              //echo $row[7],$row0[0];
              if($row[5]=='Completed')
              {
                if ($row[7] == $row0[0]) {
                  echo "<form action='certificates/cgenerator.php' method='post'>
                              <input type='hidden' name='sname' value='$fname $lname'>
                              <input type='hidden' name='cname' value=$row[1]>
                              <button type='submit' name='generate' class='btn btn-outline-primary'>Generate Certificate</button>
                          </form><br>";
                }
              }
              echo "<a href=\"dml.php?id=" . $row[1] . "&mail=" . $email . "&table=register&action=exit\" class='btn btn-outline-primary' title='Exit from this course'>Quit</a>";
              //echo $row[1];
            }
            echo "</center></div></div>";
            echo "<hr><h2 style='float:center;color:black;margin-left:20px;'>Study Materilas</h2><hr>";
            echo "<div class='table-responsive'>";
            $sql = "select * from `study_materials` where `course` = '$row[1]';";
            $res = mysqli_query($conn, $sql);
            $f = false;
            if (mysqli_num_rows($res) >= 1) {
              $f = true;
              echo "
                            <table class='table table-hover'>
                            <thead class='thead-light'>
                              <tr style='font-weight: bold;'>
                                <td>No</td>
                                <td>Course name</td>
                                <td>File name</td>
                                <td>File Size</td>
                                <td></td>
                              </tr>
                            <thead>
                            <tbody>";
              $i = 1;
              while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                                <td>" . $i . "</td>
                                <td>" . $row['course'] . "</td>
                                <td>" . $row['name'] . "</td>
                                <td>";
                echo floor($row['size'] / 1000) . ' KB';
                echo "</td>
                                <td>
                                    <a href=\"download.php?file_id=" . $row['id'] . "\" class='btn btn-outline-primary' title='Download'><span class='fa fa-download'></span></a>";
                $extension = pathinfo($row['name'], PATHINFO_EXTENSION);
                if (in_array($extension, ['mp4', 'mkv', 'mpeg', 'mov', 'swf', 'flv', 'wmv', 'avi', '3gb', 'vob', 'aaf', 'mod'])) {
                  echo "&nbsp<a href=\"preview.php?file_name=" . $row['name'] . "\" class='btn btn-outline-primary' title='Preview'><span class='fa fa-eye'></span></a>";
                }

                echo "</td>
                              </tr>";
                $i = $i + 1;
              }
              echo "</tbody>
                          </table>";
            }
            if (!$f) {
              echo "No Records Available";
            }
            echo "</div><br>";
          }
          ?>
        </section>
        
        <section class="container">
          <!--mycourse-->
          <div class="container" id="d1" style="margin-top:5px; display:none; text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
            <div style="font-size:xx-large; padding-top:15px; padding-bottom:10px">
              <h2>Course Details<h2>
                  <input type="search" id="myInput" placeholder="Search..." class="form-control" >
            </div>
            <div class="table-responsive">
              <?php
              $sql = "select * from `course` where `status` in ('Ongoing','completed') order by `title` asc;";
              $res = mysqli_query($conn, $sql);
              $f = false;
              if (mysqli_num_rows($res) >= 1) {
                $f = true;
                echo "
                          <table class='table table-hover' > 
                          <thead class='thead-light'>
                            <tr style='font-weight: bold;'>
                              <td>No</td>
                              <td>Title</td>
                              <td>Discription</td>
                              <td>Duration</td>
                              <td>Teacher name</td>
                              <td>status</td>
                              <td></td>
                            </tr>
                          <thead>
                          <tbody id='myTable'>";
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
                  echo "<tr>
                        <td>" . $i . "</td>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['discription'] . "</td>
                        <td>" . $row['duration'] . "</td>
                        <td>" . $row['teacher_name'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td>
                          <form action='dml.php' method='post'>
                            <input type='hidden' name='cname' value='";
                  echo $row['title'];
                  echo "'>
                            <input type='hidden' name='semail' value='";
                  echo $email;
                  echo "'>
                            <input type='hidden' name='sname' value='";
                  echo $fname, ' ', $lname;
                  echo "'>
                            <button type='submit' name='join' class='btn btn-outline-primary'>Join</button>
                          </form>
                        </td>
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
          </div>
          <br>
        </section>

        <section id="s2" style="display: none;">
          <div class="container" style=" border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
            <center>
              <div style="width:190px ;height: 100px; border-radius: 50%;  padding: 3px;" id="DP">
                <div style="width:190px ;height: 190px; border-radius: 50%; border: 2px solid orangered; padding: 3px;">
                  <img class=" img-responsive" src="<?php echo $dp; ?>" alt="vannilla" style="width:180px ;height: 180px; border-radius: 50%;">
                </div>
              </div>
              <div class="mydiv" id="mydiv">
                <div class="contacts12-main" style="background-color:white; border:2px solid orangered; border-radius:20px; padding-top:80px;"><br>
                  <h3><?php echo "$fname $lname"; ?></h3><br>
                  <center>
                    <?php
                    require 'MyProfile.php';
                    ?></center><br>
                  <button class=" btn btn-primary" data-toggle="modal" data-target="#profileupdate">Update Profile</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button class=" btn btn-primary" data-toggle="modal" data-target="#photoupdate">Update Photo</button><br><br>
                </div><br>
              </div><br>
            </center>
          </div><br>
        </section>

        <section id="s3" style="display: none;">
          <div class="container">
            <center>
              <div style="width:90%;border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
                <div style="background-color: aqua;border-radius:20px 20px 0px 0px;padding:15px;padding-left:50px;height:60px;">
                  <div style="float: left;">
                    <h3>CHAT</h3>
                  </div>
                  <div style="float: right;">
                    <div style="float: right;">
                      <button onclick="inputShow();" style="float: right; background-color: transparent;border-color: transparent;">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                    <div id="search" style="float: right;display:none; "><input style="height:30px;" type="search" id="mySearch" placeholder="Search..." class="form-control"></div>
                  </div>
                </div>
                <div id="myContact">
                  <?php
                  foreach ($courses as $value) {
                    $sql = "select * from `course` where `title`='$value';";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_row($res);
                    $sql2 = "select `img_path` from `faculty` where `email`='$row[4]';";
                    $res2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_row($res2);
                    $chatid = $email . $row[1] . $row[4];

                    //notification check
                    $count=0;
                    $sql5 = "select * from `chat` where `chatid`='$chatid' AND `recieverid`='$email';";
                    $res5 = mysqli_query($conn, $sql5);
                    while ($row5 = mysqli_fetch_assoc($res5))
                    {   
                        if($row5['status'] == ''){$count=$count+1;}
                    }
                    //notification check
                    echo "<form action='verification.php' method='post'>
                            <input type='hidden' name='senderName' value='";
                    echo $fname, " ", $lname;
                    echo "'>
                            <input type='hidden' name='senderEmail' value='";
                    echo $email;
                    echo "'>
                            <input type='hidden' name='senderDp' value='";
                    echo $dp;
                    echo "'>

                            <input type='hidden' name='recieverName' value='";
                    echo $row[3];
                    echo "'>
                            <input type='hidden' name='recieverEmail' value='";
                    echo $row[4];
                    echo "'>
                            <input type='hidden' name='recieverDp' value='";
                    echo $row2[0];
                    echo "'>

                            <input type='hidden' name='cname' value='";
                    echo $row[1];
                    echo "'>
                            <input type='hidden' name='chatId' value='";
                    echo $chatid;
                    echo "'>
                            <input type='hidden' name='user' value='student'>
                            <button type='submit' name='chat' class='container specialbutton'>";
                    echo "<img src='";
                    echo $row2[0];
                    echo "' alt='Avatar' class='img1'>";
                    echo "<p style='float:left;margin-left:50px;margin-top:20px;color:black;'>";
                    echo $row[3], " ~ ", $row[1];
                    echo "<p>";
                    if($count > 0)
                    {
                        echo "<span class='badge rounded-pill bg-primary' style='float:right;margin-right:4%;margin-top:20px;color:black;'>",$count,"</span>";
                    }
                    echo "</button></form>";
                  }
                  ?>
                </div>
              </div>
            </center>
          </div><br>
        </section>

        <section class="container" id="s4" style="display: none;">
            <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
                <h1>Available Quiz</h1><br>
                <div class='table-responsive'>
                    <?php
                        $f = false;
                        foreach ($courses as $value){
                            $sql = "select distinct `quizid`,`course`,`timer` from `quiz` where `course`='$value';";
                            $res = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {$f = true;}
                        }

                        if($f){
                        echo "<table class='table table-hover' > 
                                    <thead class='thead-light'>
                                        <tr style='font-weight: bold;'>
                                        <td>No</td>
                                        <td>Quiz code</td>
                                        <td>Course</td>
                                        <td>Duration</td>
                                        <td>Status</td>
                                        <td></td>
                                        </tr>
                                    <thead>
                                    <tbody>";
                        }
                        $i = 1;
                        foreach ($courses as $value){
                            $sql = "select distinct `quizid`,`course`,`timer` from `quiz` where `course`='$value' order by id desc;";
                            $res = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($res) >= 1) {
                            // $f = true;
                                
                                
                                while ($row = mysqli_fetch_assoc($res)) {
                                echo "<tr>
                                        <td>" . $i . "</td>
                                        <td>" . $row['quizid'] . "</td>
                                        <td>" . $row['course'] . "</td>
                                        <td>" . $row['timer'] . "</td>
                                        <td>";
                                            $sql0 = "select `mark` from `scoreboard` where `quizcode`='".$row['quizid']."' and `email`='$email';";
                                            $res0 = mysqli_query($conn, $sql0);
                                            if (mysqli_num_rows($res0) == 1)
                                            {
                                              $row0 = mysqli_fetch_row($res0);
                                              echo "<p style='color:green;'>Score : ",$row0[0],"<p>";
                                            }
                                            else
                                            {
                                                echo "<p style='color:red;'>NOT ATTEND<p>";
                                            }
                                            
                                        echo "</td>
                                        <td>
                                        <a href=\"quiz.php?id=" . $row['quizid'] . "&user=" . $email. "\" class='btn btn-outline-primary' >Attend</a>
                                        </td>
                                    </tr>";
                                $i = $i + 1;
                                }
                            }
                        }
                        echo "</tbody>
                            </table>";
                        if (!$f) {
                            echo "No Records Available";
                        }
                    ?>
                </div>
            </div><br>
        </section>

        <section class="container" id="s5" style="display: none;">
            <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
                <h1>Announcements</h1><br>
                <input type="search" id="myInput2" placeholder="Search..." class="form-control" >
                <div class='table-responsive' >
                    <?php
                        $f = false;
                        foreach ($courses as $value){
                            $sql = "select * from `anouncement` where `subject`='$value';";
                            $res = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {$f = true;}
                        }
                        $sql0 = "select * from `anouncement` where `subject`=' ';";
                        $res0 = mysqli_query($conn, $sql0);
                        while ($row0 = mysqli_fetch_assoc($res0)) {$f = true;}
                        if($f){
                        echo "<table class='table table-hover' id='myTable2'> 
                                    <thead class='thead-light'>
                                        <tr style='font-weight: bold;'>
                                        <td>No</td>
                                        <td>Send From</td>
                                        <td>Course</td>
                                        <td>Message</td>
                                        <td>date</td>
                                        </tr>
                                    <thead>
                                    <tbody>";
                        }
                        $i = 1;
                        foreach ($courses as $value){
                            $sql = "select * from `anouncement` where `subject`='$value' order by `id` desc;";
                            $res = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($res) >= 1) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo "<tr>
                                        <td>" . $i . "</td>
                                        <td>" . $row['sendername'] . "</td>
                                        <td>" . $row['subject'] . "</td>
                                        <td>" . $row['message'] . "</td>
                                        <td>" . $row['date'] . "</td>
                                    </tr>";
                                $i = $i + 1;
                                }
                            }
                        }
                        //for Admin announcement
                        $sql = "select * from `anouncement` where `subject`=' ' order by `id` desc;";
                            $res = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($res) >= 1) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo "<tr>
                                        <td>" . $i . "</td>
                                        <td>" . $row['sendername'] . "</td>
                                        <td>" . $row['subject'] . "</td>
                                        <td>" . $row['message'] . "</td>
                                        <td>" . $row['date'] . "</td>
                                    </tr>";
                                $i = $i + 1;
                                }
                            }

                        echo "</tbody>
                            </table>";
                        if (!$f) {
                            echo "No Records Available";
                        }
                    ?>
                </div>
            </div><br>
        </section>

        <section  id="s6" style="display: none;">
          <div class="container">
            <div class="container" style="padding-left:10px; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
              <div class="header-section text-center">
                <h3 class="mb-md-5 mb-4">Feedback</h3>
              </div>
              <form action="" method="post" class="" autocomplete="off">
                <center>
                  <input type="text" name="name" placeholder="Enter your name" value="<?php echo $fname,' ', $lname; ?>" class="maininput" required="" />
                  <input type="email" name="sender" placeholder="Enter your mail" value="<?php echo $email; ?>" class="maininput" required="" />
                  <select required="" name="subject" class="maininput" >
                      <option value="" disabled selected>&nbsp;Subject</option>
                      <?php
                      foreach ($courses as $value) {
                        echo "<option value='$value'>&nbsp;$value</option>";
                      }
                      ?>
                    </select>
                  <textarea class="contact-textarea maininput" name="message" placeholder="Enter your message"
                      required="" style="height:100px;"></textarea>
                </center>
                <div class="text-right" style="padding-right: 15%;">
                  <button class="btn-primary btn theme-button" type="reset" style="height: 50px;">Clear</button>
                  <button class="btn-primary btn theme-button" type="submit" name="feedback" style="height: 50px;">Send</button>
                </div><br>
              </form>
            </div><br>
          </div>
        </section>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
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
      var s1 = document.getElementById("s1");
      var s2 = document.getElementById("s2");
      var s3 = document.getElementById("s3");
      var s4 = document.getElementById("s4");
      var s5 = document.getElementById("s5");
      var s6 = document.getElementById("s6");
      var d1 = document.getElementById("d1");
      if (s1.style.display == "none") {
        s1.style.display = "block";
        s2.style.display = "none";
        s3.style.display = "none";
        s4.style.display = "none";
        s5.style.display = "none";
        s6.style.display = "none";
        d1.style.display = "none";
      }
    }

    function d1Show() {
      //alert("clicked");
      var x = document.getElementById("d1");
      var y = document.getElementById("mc");
      if (x.style.display == "none") {
        x.style.display = "block";
        y.style.display = "none";
      } 
      else 
      {
        x.style.display = "none";
      }
      
    }

    function inputShow() {
      var x = document.getElementById("search");
      if (x.style.display == "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";

      }
    }

    function s2Show() {
      //alert("clicked");
      var s1 = document.getElementById("s1");
      var s2 = document.getElementById("s2");
      var s3 = document.getElementById("s3");
      var s4 = document.getElementById("s4");
      var s5 = document.getElementById("s5");
      var s6 = document.getElementById("s6");
      var d1 = document.getElementById("d1");
      var d2 = document.getElementById("mc");
      if (s2.style.display == "none") {
        s2.style.display = "block";
        s1.style.display = "none";
        s3.style.display = "none";
        s4.style.display = "none";
        s5.style.display = "none";
        s6.style.display = "none";
        d1.style.display = "none";
        d2.style.display = "none";
      }
    }

    function s3Show() {
      //alert("clicked");
      var s1 = document.getElementById("s1");
      var s2 = document.getElementById("s2");
      var s3 = document.getElementById("s3");
      var s4 = document.getElementById("s4");
      var s5 = document.getElementById("s5");
      var s6 = document.getElementById("s6");
      var d1 = document.getElementById("d1");
      var d2 = document.getElementById("mc");
      if (s3.style.display == "none") {
        s3.style.display = "block";
        s1.style.display = "none";
        s2.style.display = "none";
        s4.style.display = "none";
        s5.style.display = "none";
        s6.style.display = "none";
        d1.style.display = "none";
        d2.style.display = "none";
      }
    }

    function s4Show() {
      //alert("clicked");
      var s1 = document.getElementById("s1");
      var s2 = document.getElementById("s2");
      var s3 = document.getElementById("s3");
      var s4 = document.getElementById("s4");
      var s5 = document.getElementById("s5");
      var s6 = document.getElementById("s6");
      var d1 = document.getElementById("d1");
      var d2 = document.getElementById("mc");
      if (s4.style.display == "none") {
        s4.style.display = "block";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
        s5.style.display = "none";
        s6.style.display = "none";
        d1.style.display = "none";
        d2.style.display = "none";
      }
    }

    function s5Show() {
      //alert("clicked");
      var s1 = document.getElementById("s1");
      var s2 = document.getElementById("s2");
      var s3 = document.getElementById("s3");
      var s4 = document.getElementById("s4");
      var s5 = document.getElementById("s5");
      var s6 = document.getElementById("s6");
      var d1 = document.getElementById("d1");
      var d2 = document.getElementById("mc");
      if (s5.style.display == "none") {
        s5.style.display = "block";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
        s4.style.display = "none";
        s6.style.display = "none";
        d1.style.display = "none";
        d2.style.display = "none";
      }
    }

    function s6Show() {
      //alert("clicked");
      var s1 = document.getElementById("s1");
      var s2 = document.getElementById("s2");
      var s3 = document.getElementById("s3");
      var s4 = document.getElementById("s4");
      var s5 = document.getElementById("s5");
      var s6 = document.getElementById("s6");
      var d1 = document.getElementById("d1");
      var d2 = document.getElementById("mc");
      if (s6.style.display == "none") {
        s6.style.display = "block";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
        s4.style.display = "none";
        s5.style.display = "none";
        d1.style.display = "none";
        d2.style.display = "none";
      }
    }
  </script>
  <script>
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
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
      $("#mySearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myContact button").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
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