<?php
if (isset($_GET['file_name'])) {
  $filename = $_GET['file_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
  <title>Preview</title>
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <br><br><br>
  <div>
    <h5>
      <a href="student.php" style="float: left;margin-left:5%;" title="back to student dashbord">
        <span class="fa fa-arrow-left"></span>
      </a>&nbsp;&nbsp;<?php echo $filename; ?>
    </h5>
    </<br>
    <center>
      <video controls autoplay width="90%" height="550" muted style="border:2px solid red;background-color:black;">
        <source src="uploads/<?php echo $filename; ?>">Your browswer not support the video tag
      </video>
  </div>
  </center>
</body>

</html><?php
