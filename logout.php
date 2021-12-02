<?php
    session_start();
    $cat=$_GET["user"];
    if($cat == "admin")
    {
        unset($_SESSION['admin']);
        header("Location:adminlogin.php");
    }
    else if($cat == "student")
    {
        unset($_SESSION['student']);
        header("Location:index.php");
    }
    else if($cat == "faculty")
    {
        unset($_SESSION['faculty']);
        header("Location:index.php");
    }
    else if($cat == "schat")
    {
        unset($_SESSION['schat']);
        header("Location:student.php");
    }
    else if($cat == "fchat")
    {
        unset($_SESSION['fchat']);
        header("Location:faculty.php");
    }
?>