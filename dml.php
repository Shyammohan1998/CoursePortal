<?php
require 'DBconnection.php';
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['join'])) {
    $sname = $_POST['sname'];
    $semail = $_POST['semail'];
    $cname = $_POST['cname'];
    $sql0 = "select `email` from `student` where `email`='" . $semail . "';";
    $res0 = mysqli_query($conn, $sql0);
    $row = mysqli_fetch_row($res0);
    if ($row[0] == $semail) {
        $sql1 = "select * from `register` where `semail`='" . $semail . "' AND `cname`='" . $cname . "';";
        $res1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($res1) >= 1) {
            $ret = $_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('You are Already Joined');
                window.location='$ret'</script>";
        } else {
            $sql2 = "insert into `register`(`sname`,`semail`,`cname`) values ('" . $sname . "','" . $semail . "','" . $cname . "');";
            $query = mysqli_query($conn, $sql2);
            if ($query) {
                $ret = $_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('You are Seccessfully joined in $cname');
                    window.location='$ret'</script>";
            } else {
                $ret = $_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Join Failed');
                    window.location='$ret'</script>";
            }
        }
    } else {
        $ret = 'studreg.php';
        echo "<script type='text/javascript'>alert('Sorry! You are not a student.Please join us Student');
            window.location='$ret'</script>";
    }
}
if (isset($_POST['addcourse'])) {
    $ttle = $_POST['corsetitle'];
    $disc = $_POST['discription'];
    $drtn = $_POST['duration'];
    $tnm = $_POST['tname'];
    $sts = 'Requested';
    $email = $_POST['temail'];
    $sql = "insert into `course`(`title`,`discription`,`teacher_name`,`teacher_email`,`status`,`duration`) values ('" . $ttle . "','" . $disc . "','" . $tnm . "','" . $email . "','" . $sts . "','" . $drtn . "');";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $sql0 = "select * from `admin`;";
        $res0 = mysqli_query($conn, $sql0);
        while($row0=mysqli_fetch_array($res0))
        {
            $adrs[]=$row0['email'];
        }
        $to=implode(",",$adrs);
        //$to = "shyammohan141298@gmail.com";
        $sub = "Request for Approval";
        $body = "Dear Admin,
        \n\tSomeone create a new course in MyGuru-online course portal.please Approve that request, if you wish.
  
        \n\n*** This is System generated Email.please do not reply to it ***";
        $headers = "From: MyGuru\-online ";
        $ret = $_SERVER['HTTP_REFERER'];
        if (mail($to, $sub, $body, $headers)) {
            echo "<script type='text/javascript'>alert('your Request is recorded.please wait for the admin approval');window.location='$ret'</script>";
        } else {
            echo "<script type='text/javascript'>alert('your Request is recorded.please wait for the admin approval. But mail not Sent to the admin');window.location='$ret'</script>";
        }
    } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Insertion failed');
            window.location='$ret'</script>";
    }
}
$id = $_GET['id'];
$tbl = $_GET['table'];
$actn = $_GET['action'];
$mailid = $_GET['mail'];
if ($actn == "delete") {

    $sql = "delete from $tbl where `id`='" . $id . "';";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        //$to="shyammohan141298@gmail.com";
        $sub = "Greeting from MyGuru-Online";
        $ret = $_SERVER['HTTP_REFERER'];
        if ($tbl == 'faculty') {
            $body = "Dear Faculty,
            \n\tSorry! your Request for join us Faculty is Rejected / you are removed from your MyGuru-online community.
            
            \n\n*** This is System generated Email.please do not reply to it ***";
        }
        else if ($tbl == 'course') {
            $body = "Dear Faculty,
            \n\tSorry! your Request for create a new course is Rejected / removed from your MyGuru-online community.
            
            \n\n*** This is System generated Email.please do not reply to it ***";
        } 
        else if ($tbl == 'study_materials') {
            echo "<script type='text/javascript'>alert('successfully deleted');
            window.location='$ret'</script>";
        }
        else if ($tbl == 'anouncement') {
            echo "<script type='text/javascript'>alert('successfully deleted');
            window.location='$ret'</script>";
        }
        $headers = "From: MyGuru\-online ";

        if (mail($mailid, $sub, $body, $headers)) {
            //$ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('successfully deleted');
            window.location='$ret'</script>";
        } else {
            //$ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Deleted. But mail not Sent');
            window.location='$ret'</script>";
        }
    } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Process Failed');
            window.location='$ret'</script>";
    }
}
if ($actn == "update") {
    $sql = "update $tbl set `status`='Approved' where `id`='" . $id . "';";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        //$to="shyammohan141298@gmail.com";
        $sub = "Greeting from MyGuru-Online";
        if ($tbl == 'faculty') {
            $body = "Dear Faculty,
            \n\tCongradulation, your Request for join us Faculty is Approved. Now you can login as your dashboard using registered Email id and your saved password.
            \nBest wishesh for your teaching.
            
            \n\n*** This is System generated Email.please do not reply to it ***";
        } else if ($tbl == 'course') {
            $body = "Dear Faculty,
            \n\tCongradulation, your Request for create a new course is Approved. Now you can start your course.
            \nBest wishesh for your teaching.
            
            \n\n*** This is System generated Email.please do not reply to it ***";
        }
        $headers = "From: MyGuru\-online ";
        $ret = $_SERVER['HTTP_REFERER'];
        if (mail($mailid, $sub, $body, $headers)) {
            //$ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Approved');
            window.location='$ret'</script>";
        } else {
            //$ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Approved. But mail not Sent');
            window.location='$ret'</script>";
        }
    } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Process Failed');
            window.location='$ret'</script>";
    }
}
if ($actn == "Ongoing") {
    $sql = "update $tbl set `status`='Ongoing' where `id`='" . $id . "';";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Status changed to Ongoing');
            window.location='$ret'</script>";
    } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Process Failed');
            window.location='$ret'</script>";
    }
}
if ($actn == "exit") {
    $sql = "delete from $tbl where `cname`='" . $id . "' AND `semail`='" . $mailid . "';";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('You are successfully exited from $id');
            window.location='$ret'</script>";
    } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Process Failed');
            window.location='$ret'</script>";
    }
}
if ($actn == "Completed") {
    $sql = "update $tbl set `status`='Completed' where `id`='" . $id . "';";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Status changed to Completed');
            window.location='$ret'</script>";
    } else {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>alert('Process Failed');
            window.location='$ret'</script>";
    }
}
