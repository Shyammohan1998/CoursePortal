<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Certificate Generator</title>
  <style>
    /* Center the loader */
    #loader {
      position: absolute;
      left: 50%;
      top: 50%;
      z-index: 1;
      width: 120px;
      height: 120px;
      margin: -76px 0 0 -76px;
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid orange;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Add animation to "page content" */
    .animate-bottom {
      position: relative;
      -webkit-animation-name: animatebottom;
      -webkit-animation-duration: 1s;
      animation-name: animatebottom;
      animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
      from { bottom:-100px; opacity:0 } 
      to { bottom:0px; opacity:1 }
    }

    @keyframes animatebottom { 
      from{ bottom:-100px; opacity:0 } 
      to{ bottom:0; opacity:1 }
    }

    #myDiv {
      display: none;
      text-align: center;
    }
</style>

</head>

<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
  <center>
    <br><br><br>
    <h1>Certificate Generator</h1>
    <br>
  <?php
    if (isset($_POST['generate'])) {
      $name = strtoupper($_POST['sname']);
      $name_len = strlen($_POST['sname']);
      $course = strtoupper($_POST['cname']);
      if ($course) {
        $font_size_course = 10;
      }

      if ($name == "" || $course == "") {
        echo
        "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
      } else {
        echo
        "
          <div class='alert alert-success col-sm-6' role='alert'>
              Congratulations! $name on your excellent success.
          </div><br>
          ";

        //designed certificate picture
        $image = "certificate.png";
        
        $createimage = imagecreatefrompng($image);

        //this is going to be created once the generate button is clicked
        $dt = date("d-m-y");
        $output = "$name-$course-certificate.png";

        //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
        $white = imagecolorallocate($createimage, 205, 245, 255);
        $black = imagecolorallocate($createimage, 0, 0, 0);

        //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
        $rotation = 0;

        //we then set the x and y axis to fix the position of our text name
        $origin_x = 180;
        $origin_y = 250;

        //we then set the x and y axis to fix the position of our text course
        
        $origin0_x = 410;
        $origin0_y = 304;
        
        //we then set the x and y axis to fix the position of our text date
        
        $origin1_x = 185;
        $origin1_y = 370;

        //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
        if ($name_len <= 7) {
          $font_size = 25;
          $origin_x = 190;
        } elseif ($name_len <= 12) {
          $font_size = 30;
        } elseif ($name_len <= 15) {
          $font_size = 26;
        } elseif ($name_len <= 20) {
          $font_size = 18;
        } elseif ($name_len <= 22) {
          $font_size = 15;
        } elseif ($name_len <= 33) {
          $font_size = 11;
        } else {
          $font_size = 10;
        }

        $certificate_text = $name;

        //font directory for name
        $drFont = dirname(__FILE__) . "/developer.ttf";

        // font directory for course name
        $drFont1 = dirname(__FILE__) . "/Gotham-black.otf";

        //function to display name on certificate picture
        $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $certificate_text);

        //function to display course name on certificate picture
        $text2 = imagettftext($createimage, $font_size_course, $rotation, $origin0_x + 2, $origin0_y, $black, $drFont1, $course);
        $text3 = imagettftext($createimage, $font_size_course, $rotation, $origin1_x + 2, $origin1_y, $black, $drFont1, $dt);

        imagepng($createimage, $output, 3);

    ?>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>" style='width:45%;'>
        <br>
        <br>

        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="btn btn-success">Download My Internship Certificate</a><br>
        <a href="../student.php">Go Back</a>
        <br><br>
    <?php
      }
    }

    ?>
  </center>
</div>
  <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 2300);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

