<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "MyGuru";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("connection failed");
    mysqli_select_db($conn, $dbname);
?>
