<?php require 'DBconnection.php'; ?>
<?php
session_start();
if (isset($_SESSION['faculty'])) {
  $fname = $_SESSION['faculty']['Fname'];
  $lname = $_SESSION['faculty']['Lname'];
  $dp = $_SESSION['faculty']['Dp'];
  $email = $_SESSION['faculty']['email'];
  $tablename = $_SESSION['faculty']['user'];
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
  <title>Faculty</title>

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

      .myimg {
        height: 50%;
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

    .hide-scroll::-webkit-scrollbar {
      display: none;
    }

    .maininput
    {
      width: 70%;
      margin: 10px;
      height: 50px;
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
        <a href="#" class="btn-outline-primary" data-toggle="modal" data-target="#resetpassword">Reset Password</a>
        <a href="#" class="btn-outline-primary" onclick="s3Show();">Querry/Response
          <?php 
            if($acount > 0)
            {
                echo "<span class='badge rounded-pill bg-primary' style='color:black;'>",$acount,"</span>";
            }
          ?>    
        </a>
        <a href="#" class="btn-outline-primary" onclick="s4Show();">Announcement</a>
        <a href="#" class="btn-outline-primary" data-toggle="modal" data-target="#quiz">Generate Quiz</a>
        
        <a href="#" class="btn-outline-primary" onclick="s5Show();">Feedbacks</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <header>
        <div class="navbar navbar-expand-lg navbar-light border-bottom col-md-12" id="navigation" style="position:fixed;background-color: aqua; top: opx;">
          <button class="btn toggle-btn navbar-brand" id="menu-toggle"><span class="navbar-toggler-icon"></span>&nbsp;<img src="assets/images/logo-icon.png" alt="" />MyGuru<sub style="font-size: 15px; color:orangered;">online</sub>
          </button>
          <button class="btn" id="navig"><a href="logout.php" onclick="location.href=this.href+'?user='+'faculty';return false;">LogOut</a></button>

        </div>

      </header>

      <div class="container" style="margin-top: 90px;">

        <!-- breadcrum -->
        <section class="w3l-skill-breadcrum">
          <div class="breadcrum">
            <div class="container">
              <p><a href="index.php">Home</a> &nbsp; / &nbsp; Faculty</p>
            </div>
          </div>
        </section><br>
        <!-- breadcrum -->

        <section id="s1" class="container">
          <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef">
            <div>
              <div style="display: block;"><br>
                <h1>My Courses</h1>
                <?php
                  $sql = "select * from `course` where `teacher_email`='$email';";
                  $res = mysqli_query($conn, $sql);
                  $f = false;
                  $courses = array();
                  if (mysqli_num_rows($res) >= 1) 
                  {
                    $f = true;
                    echo "<form action='' method='post'><ul>";
                    while ($row = mysqli_fetch_assoc($res)) {
                      echo "<li><button class='my' name='cid' value=";
                      echo $row['id'];
                      echo "><h6>";
                      echo $row['title'];
                      echo "</h6></button></li>";
                      if($row['status'] <> 'Requested' && $row['status'] <> 'Approved')
                      {
                        $courses[] = $row['title'];
                      }                    
                    }
                    echo "</ul></form>";
                  }
                  if (!$f) 
                  {
                    echo "No Courses are Available";
                  }
                  echo "<br><button class='btn btn-primary' data-toggle='modal' data-target='#addcourse'>Create New Course</button><br><br>";
                ?>

              </div>
            </div>

            

            <!--add course popup-->
            <div class="modal fade" id="addcourse" role="dialog">
              <div class="modal-dialog modal-dialog-centered">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="dml.php" method="POST" autocomplete="off">
                      <div class="form-group" style="text-align: center;">
                        <input type="text" name="corsetitle" class="contact-input" placeholder="Course Name" required="" id="input" title="Enter the name of the new course" />
                        <textarea name="discription" class="contact-input" placeholder="Course Discription" required="" id="input" autocomplete="none" title="Enter discription about course"></textarea>
                        <input type="text" name="duration" class="contact-input" placeholder="Course Duration" required="" id="input" title="Enter the duration of the new course" />
                        <input type="text" name="tname" class="contact-input" placeholder="Teacher Name" required="" id="input" title="Enter the name of the teacher" value="<?php echo $fname,' ', $lname; ?>" />
                        <input type="hidden" name="temail" class="contact-input" value="<?php echo $email; ?>" />
                        
                        <button type="submit" id="input" class="btn btn-primary" name="addcourse">Add</button><br>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Modal content-->
              </div>
            </div>
            <!--add course popup-->
          </div>
          
          <!--mycourse-->
          <div id="crs">
            <?php
            if (isset($_POST['cid'])) 
            {
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
                    </tr>";
                    if($row[5] == "Ongoing" or $row[5] == "Completed")
                    {
                      echo "<tr  class='tr'>
                        <td class='tdl'>No of Students</td>
                        <td class='tdr'>";
                            $sql0 = "select count(*) from `register` where `cname`='$row[1]';";
                            $res0 = mysqli_query($conn, $sql0);
                            $row0 = mysqli_fetch_row($res0);
                            echo "<form action='' method='post'>$row0[0]";
                              if($row0[0]>0){ echo" <button class='my' name='sub' value='" . $row[1] . "' style='color:orange;'>View My students</button>"; }
                            echo "</form>
                        </td>
                      </tr>";
                    }
                    echo "<tr  class='tr'>
                        <td class='tdl'>Status</td>
                        <td class='tdr'>$row[5]</td>
                    </tr>
                    
                </table>";
                if ($row[5] == "Approved") {
                  echo "<a href=\"dml.php?id=" . $row[0] . "&table=course&action=Ongoing\" class='btn btn-outline-primary'>Ongoing</a><br><br>";
                }
                if ($row[5] == "Completed") {
                  echo "<a href=\"dml.php?id=" . $row[0] . "&table=course&action=Ongoing\" class='btn btn-outline-primary'>Ongoing</a><br><br>";
                }
                if ($row[5] == "Ongoing") {
                  echo "<a href=\"dml.php?id=" . $row[0] . "&table=course&action=Completed\" class='btn btn-outline-primary'>Completed</a>";
                }
              }
              echo "</center></div></div>";
              if ($row[5] == "Ongoing" or $row[5] == "Completed") { 
                echo "<hr>";
              }
              echo "<div style='font-size:xx-large; padding-top:15px; padding-bottom:10px'>";
              if ($row[5] == "Ongoing") {
                echo "<button class='btn btn-primary' data-toggle='modal' data-target='#upload' style='float:right;' title='Upload Study materials'><span class='fa fa-upload'></span>&nbspUpload</button>";
              }
              if ($row[5] == "Ongoing" or $row[5] == "Completed") {
                echo "<h2 style='float:center;color:black;margin-left:20px;'>Study Materilas</h2></div><hr>";
            ?>
                <!--meterils add popup-->
                <div class="modal fade" id="upload" role="dialog">
                  <div class="modal-dialog modal-dialog-centered">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Upload study meterials</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action=" " method="POST" autocomplete="off" enctype="multipart/form-data">
                          <div class="form-group" style="text-align: center;">
                            <input type="text" name="cname" class="contact-input" placeholder="Course Name" required="" id="input" value="<?php echo $row[1]; ?>" autocomplete="off" />
                            <input type="text" class="contact-input" id="input" required="" name="myfile" placeholder="Upload Your Course Meterils" onfocus="(this.type='file')" title="please upload course meterils">
                            <button type="submit" id="input" class="btn btn-primary" name="upload">Submit</button><br>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--meterils add popup-->
            <?php
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
                        <td>Size</td>
                        <td>Downloads</td>
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
                        <td>" . $row['downloads'] . "</td>
                        <td><a href=\"dml.php?id=" . $row['id'] . "&table=study_materials&action=delete\" class='btn btn-outline-primary' title='Delete'><span class='fa fa-trash'></span></a></td>
                      </tr>";
                    $i = $i + 1;
                  }
                  echo "</tbody>
                  </table>";
                }
                if (!$f) {
                  echo "No Records Available";
                }
              }
              echo "</div>";
            }
            echo "</div>";
            ?>

            <?php
            if (isset($_POST['upload'])) {
              $course = $_POST["cname"];
              $filename = $_FILES['myfile']['name'];
              $destination = 'uploads/' . $filename;
              $extension = pathinfo($filename, PATHINFO_EXTENSION);
              $file = $_FILES['myfile']['tmp_name'];
              $size = $_FILES['myfile']['size'];
              /*if (!in_array($extension, ['zip', 'pdf', 'docx'])) 
              {
                  $ret=$_SERVER['HTTP_REFERER'];
                  echo "<script type='text/javascript'>alert('You file extension must be .zip, .pdf or .docx');
                  window.location='$ret'</script>";
              }
              if ($_FILES['myfile']['size'] > 1000000) 
              { 
                  // file shouldn't be larger than 1Megabyte
                  $ret=$_SERVER['HTTP_REFERER'];
                  echo "<script type='text/javascript'>alert('File too large!');
                      window.location='$ret'</script>";
              }  */

              // move the uploaded (temporary) file to the specified destination
              if(file_exists($destination))
              {
                $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Sorry! your file name $filename is already exist. Please rename your document then try again.');
                window.location='$ret'</script>";
              }
              else if (move_uploaded_file($file, $destination)) 
              {
                $sql = "insert into `study_materials` (`course`,`name`, `size`, `downloads`) values ('$course','$filename', $size, 0)";
                if (mysqli_query($conn, $sql)) 
                {

                  $sql0 = "select * from `register` where `cname`='".$course."';";
                  $res0 = mysqli_query($conn, $sql0);
                  if (mysqli_num_rows($res0) >= 1) 
                  {
                    $sub = "New Study Material";
                    $headers = "From: MyGuru\-online ";
                    while($row0=mysqli_fetch_array($res0))
                    {
                      //$adrs[]=$row0['semail'];
                      $body = "Dear ".$row0['sname'].",
                      \n\tNew Study Material is added to your course : ".$course."
                      \nPlease login to your Dashbord for more details.
                      
                      \n\n*** This is System generated Email.please do not reply to it. ***";
                      mail($row0['semail'], $sub, $body, $headers);
                    }
                  }
                  
                  $ret = $_SERVER['HTTP_REFERER'];
                  echo "<script type='text/javascript'>alert('File uploaded successfully');
                    window.location='$ret'</script>";
                }
                else 
                {
                  $ret = $_SERVER['HTTP_REFERER'];
                  echo "<script type='text/javascript'>alert('Failed to upload file');
                  window.location='$ret'</script>";
                }
              } 
              else 
              {
                $ret = $_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Failed to upload file');
                window.location='$ret'</script>";
              }
            }
            ?>

            <div id="stdnt" >
              <?php 
                if(isset($_POST["sub"]))
                {
                  echo "<div class='container' style='margin-top:5px;text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef'>";
                  $crc = $_POST["sub"];
                  echo "<br><h1>Students join in $crc</h1>";
                  echo "<div class='table-responsive '>";
                  $sql0 = "select * from `register` where `cname`='".$crc."';";
                  $res0 = mysqli_query($conn, $sql0);
                  
                  $f = false;
                  if (mysqli_num_rows($res0) >= 1) 
                  {
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
                    while ($row0 = mysqli_fetch_assoc($res0)) {
                      echo "<tr>
                            <td>" . $i . "</td>
                            <td>" . $row0['sname'] . "</td>";
                      $sql = "select * from `student` where `email`='".$row0['semail']."';";
                      $res = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_row($res);
                      echo "<td>" . $row[3] . "</td>
                            <td>" . $row[4] . "</td>
                            <td>" . $row[5] . "</td>
                            <td>" . $row[6] . "</td>
                            <td>" . $row[7] . "</td>
                            <td>";
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
                            echo $row0['sname'];
                            echo "'>
                                    <input type='hidden' name='recieverEmail' value='";
                            echo $row0['semail'];
                            echo "'>
                                    <input type='hidden' name='recieverDp' value='";
                            echo $row[10];
                            echo "'>
                                      <input type='hidden' name='cname' value='";
                            echo $crc;
                            $chatid = $row0['semail'] . $crc . $email;
                            echo "'>
                                      <input type='hidden' name='chatId' value='";
                            echo $chatid;
                            echo "'>
                                      <input type='hidden' name='user' value='faculty'>
                                      <button type='submit' name='chat' class='btn btn-outline-primary' title='chat'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chat-dots-fill' viewBox='0 0 16 16'>
                                          <path d='M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z'/>
                                        </svg>
                                      </button></form>";
                      echo "</td>
                          </tr>";
                      $i = $i + 1;
                    }
                    echo "</tbody>
                      </table>";
                  }
                  if (!$f) {
                    echo "No Students are joined";
                  }
                  echo "</div></div>";
                }
              ?>
            </div>
          </div><br>
        <!--mycourse-->
        </section>
        
        

        <section id="s2" style="display: none;">
          <div class="container">
            <div class="container" style=" border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
              <center>
                <div style="width:190px ;height: 100px; border-radius: 50%;  padding: 3px;">
                  <div style="width:190px ;height: 190px; border-radius: 50%; border: 2px solid orangered; padding: 3px;">
                    <img class=" img-responsive" src="<?php echo $dp; ?>" alt="vannilla" style="width:180px ;height: 180px; border-radius: 50%;">
                  </div>
                </div>
                <div class="mydiv">
                  <div class="contacts12-main" style="background-color:white; border:2px solid orangered; border-radius:20px; padding-top:80px;"><br>
                    <h3><?php echo "$fname $lname"; ?></h3><br>
                    <center>
                      <?php
                      require 'MyProfile.php';
                      ?></center><br>
                    <button class=" btn btn-primary" data-toggle="modal" data-target="#profileupdate">Update Profile</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class=" btn btn-primary" data-toggle="modal" data-target="#photoupdate">Update Photo</button><br><br>
                  </div><br>
                </div>
            </div><br>
          </div>
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
                  <div class='accordion' id='accordionExample'>
                    <?php
                    $i = 0;
                    foreach ($courses as $value) {
                      $tcount=0;
                      $sql5 = "select * from `chat` where `recieverid`='$email' AND `coursename`='$value';";
                      $res5 = mysqli_query($conn, $sql5);
                      while ($row5 = mysqli_fetch_assoc($res5))
                      {   
                          if($row5['status'] == ''){$tcount=$tcount+1;}
                      }
                      $i = $i + 1;
                      echo "<div class='accordion-item'>
                                <h5 class='accordion-header' id='heading";echo $i;echo "'>
                                <button class='specialbutton accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse";echo $i;echo "' aria-expanded='false' aria-controls='collapseTwo'><h5>";echo $value;
                      if($tcount > 0)
                        {
                            echo "<span class='badge rounded-pill bg-primary' style=''>",$tcount,"</span>";
                        }
                      echo "</h5>";
                      echo "</button></h5>
                            <div id='collapse";echo $i;echo "' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'>
                                <div class='accordion-body'>";
                      $sql = "select * from `register` where `cname`='$value';";
                      $res = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($res)) {
                        $sql2 = "select `img_path` from `student` where `email`='" . $row['semail'] . "';";
                        $res2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_row($res2);
                        $chatid = $row['semail'] . $value . $email;
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
                        echo $row['sname'];
                        echo "'>
                                <input type='hidden' name='recieverEmail' value='";
                        echo $row['semail'];
                        echo "'>
                                <input type='hidden' name='recieverDp' value='";
                        echo $row2[0];
                        echo "'>
                                  <input type='hidden' name='cname' value='";
                        echo $value;
                        echo "'>
                                  <input type='hidden' name='chatId' value='";
                        echo $chatid;
                        echo "'>
                                  <input type='hidden' name='user' value='faculty'>
                                  <button type='submit' name='chat' class='container specialbutton'>";
                        echo "<img src='";
                        echo $row2[0];
                        echo "' alt='Avatar' class='img1'>";
                        echo "<p style='float:left;margin-left:50px;margin-top:20px;color:black;'>";
                        echo $row['sname'];
                        echo "<p>";
                        if($count > 0)
                        {
                            echo "<span class='badge rounded-pill bg-primary' style='float:right;margin-right:4%;margin-top:20px;color:black;'>",$count,"</span>";
                        }
                        echo "</button></form>";
                      }
                      echo "<hr></div>
                                    </div>
                                </div>";
                    }
                    ?>
                  </div>
                </div>
              </div>
            </center>
          </div><br>
        </section>
        
        <section  id="s4" style="display: none;">
          <div class="container">
            <div class="container" style="padding-left:10px; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
              <div class="header-section text-center">
                <button class='btn btn-primary'  style='float:right;margin-right:45px;margin-top:10px;' title='New announcement' onclick="d1Show();">New</button>
                <h3 style='float:center;color:black;margin-left:20px;'>Announcement</h3><br>
              </div>
              <div style="display: none;" id="d1">
                <form action="" method="post" class="" autocomplete="off">
                  <center>
                    <input type="text" name="name" placeholder="Enter your name" value="<?php echo "$fname $lname"; ?>" class="maininput" required="" /><br>
                    <input type="email" name="sender" placeholder="Enter your mail" value="<?php echo $email; ?>" class="maininput" required="" /><br>
                    <select required="" name="subject" class="maininput" >
                      <option value="" disabled selected>&nbsp;Subject</option>
                      <?php
                      foreach ($courses as $value) {
                        echo "<option value='$value'>&nbsp;$value</option>";
                      }
                      ?>
                    </select>
                    <textarea class=" maininput" name="message" placeholder="Enter your message"
                        required="" style="height:100px;"></textarea>
                  </center>
                  <div class="text-right" style="padding-right: 15%;padding-top: 10px;">
                  <button class="btn-primary btn theme-button" type="reset" style="height: 50px;">Clear</button>
                  <button class="btn-primary btn theme-button" type="submit" name="anouncement" style="height: 50px;">Send</button>
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
                        <td>Course</td>
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
                      <td>" . $row['subject'] . "</td>
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
          </div><br>
        </section>

        <section class="container" id="s5" style="display: none;">
            <div class="container" style="text-align: center; border:3px solid aqua; border-radius:20px; background-color:#e9ecef"><br>
                <h1>Feedbacks</h1><br>
                <input type="search" id="myInput" placeholder="Search..." class="form-control" >
                <div class='table-responsive'>
                    <?php
                        $f = false;
                        foreach ($courses as $value){
                            $sql = "select * from `feedback` where `subject`='$value';";
                            $res = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {$f = true;}
                        }

                        if($f){
                        echo "<table class='table table-hover' id='myTable'> 
                                    <thead class='thead-light'>
                                        <tr style='font-weight: bold;'>
                                        <td>No</td>
                                        <td>Send From</td>
                                        <td>Sender Email</td>
                                        <td>Course</td>
                                        <td>Message</td>
                                        </tr>
                                    <thead>
                                    <tbody>";
                        }
                        $i = 1;
                        foreach ($courses as $value){
                            $sql = "select * from `feedback` where `subject`='$value';";
                            $res = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($res) >= 1) {
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
        
        <!--quiz generator popup-->
        <div class="modal fade" id="quiz" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Generate Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="verification.php" method="POST" autocomplete="off">
                  <div class="form-group" style="text-align: center;">
                    <select id="input" required="" name="course">
                      <option value="" disabled selected>Course Title</option>
                      <?php
                      foreach ($courses as $value) {
                        echo "<option value='$value'>$value</option>";
                      }
                      ?>
                    </select>
                    <input type="text" name="quizid" class="contact-input" placeholder="Enter Quiz code" required="" id="input" title="Enter New Password" />
                    <button type="submit" id="input" class="btn btn-primary" name="generate">Submit</button><br>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--quiz generator popup-->

      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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
      function inputShow() {
        var x = document.getElementById("search");
        if (x.style.display == "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";

        }
      }

      function d1Show() {
        //alert("clicked");
        var x = document.getElementById("d1");
        if (x.style.display == "none") 
        {
          x.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
        }
      }


      function s1Show() {
        //alert("clicked");
        var s1 = document.getElementById("s1");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var stdnt = document.getElementById("stdnt");
        if (s1.style.display == "none") {
          s1.style.display = "block";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          stdnt.style.display = "none";
        }
      }

      function s2Show() {
        //alert("clicked");
        var s1 = document.getElementById("s1");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var stdnt = document.getElementById("stdnt");
        document.getElementById("crs").style.display = "none";
        if (s2.style.display == "none") {
          s2.style.display = "block";
          s1.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          stdnt.style.display = "none";
        }
      }

      function s3Show() {
        //alert("clicked");
        var s1 = document.getElementById("s1");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var stdnt = document.getElementById("stdnt");
        document.getElementById("crs").style.display = "none";
        if (s3.style.display == "none") {
          s3.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s4.style.display = "none";
          s5.style.display = "none";
          stdnt.style.display = "none";

        }
      }

      function s4Show() {
        //alert("clicked");
        var s1 = document.getElementById("s1");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var stdnt = document.getElementById("stdnt");
        document.getElementById("crs").style.display = "none";
        if (s4.style.display == "none") {
          s4.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s5.style.display = "none";
          stdnt.style.display = "none";
        }
      }

      function s5Show() {
        //alert("clicked");
        var s1 = document.getElementById("s1");
        var s2 = document.getElementById("s2");
        var s3 = document.getElementById("s3");
        var s4 = document.getElementById("s4");
        var s5 = document.getElementById("s5");
        var stdnt = document.getElementById("stdnt");
        document.getElementById("crs").style.display = "none";
        if (s5.style.display == "none") {
          s5.style.display = "block";
          s1.style.display = "none";
          s2.style.display = "none";
          s3.style.display = "none";
          s4.style.display = "none";
          fstdnt.style.display = "none";
        }
      }

    </script>

    <script>
      $(document).ready(function() {
        $("#mySearch").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myContact button").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });

      $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
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
if (isset($_POST['anouncement'])) 
{
  $name = $_POST['name'];
  $sender = $_POST['sender'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $dt = date("d-m-y");
  $sql = "insert into `anouncement`(`sendername`,`senderemail`,`subject`,`message`,`date`) values ('".$name."','".$sender."','".$subject."','".$message."','".$dt."');";
  $query = mysqli_query($conn, $sql);
  if ($query) 
  {
    $sql0 = "select * from `register` where `cname`='".$subject."';";
    $res0 = mysqli_query($conn, $sql0);
    if (!mysqli_num_rows($res0) >= 1) 
    {
      $ret=$_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('No Students are Registered');
        window.location='$ret'</script>";
    }
    $sub = "New Announcement from Your Course :"."$subject";
    $headers = "From: MyGuru\-online ";
    $res=0;
    while($row0=mysqli_fetch_array($res0))
    {
      //$adrs[]=$row0['semail'];
      $body = "Dear ".$row0['sname'].",
      \n\t".$message."
      \nPlease login to your Dashbord for more details.

      \n\n*** This is System generated Email.please do not reply to it. ***";
      if (mail($row0['semail'], $sub, $body, $headers))
      {
        $res=$res+1;
      }
    }
    //$to=implode(",",$adrs);
    
    if ($res==0) 
    {
      $ret=$_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('Announcement Success. But mail not Sent');
        window.location='$ret'</script>";
    } 
    else 
    {
      $ret=$_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('Announcement Success. Mail sent to $res Students');
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