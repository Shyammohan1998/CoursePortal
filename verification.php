<?php require 'DBconnection.php' ;?>
<?php session_start();?>
<!--student-->
    <!--student login check-->
    <?php
    if (isset($_POST['studentlogin'])) {
        $username = $_POST['user'];
        $passcode = $_POST['password'];
        if($username == 'admin' && $passcode == 'login')
        {
            $ret='adminlogin.php';
            echo "<script type='text/javascript'>window.location='$ret'</script>";
        }
        $sql = "select fname,lname,email,img_path from `student` where email='" . $username . "' and password='" . $passcode . "';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_row($res);
            $_SESSION['student'] = array('Fname'=>$row[0],'Lname'=> $row[1],'email'=> $row[2],'Dp'=> $row[3],'user'=> "student");
            header("Location:student.php");
        } else {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('invalid username or password');
            window.location='$ret'</script>";
        }
    }
    ?>
    <!--student login check-->
    <!--student forgot check-->
    <?php 
    if (isset($_POST['studentforgot'])) {
        $regemail = $_POST['email'];
        $sql = "select password,fname from `student` where email='$regemail';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_row($res);
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Hai... '+'".$row[1]."'+' Your Password is '+'".$row[0]."');
            window.location='$ret'</script>";
        } else {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('SORRY!, Your Email-id does not exist in our Data Base');
            window.location='$ret'</script>";
        }
    }
    ?>
    <!--student forgot check-->
<!--student-->

<!--faculty-->
    <!--faculty login check-->
    <?php
    if (isset($_POST['facultylogin'])) {
        $username = $_POST['user'];
        $passcode = $_POST['password'];
        if($username == 'admin' && $passcode == 'login')
        {
            $ret='adminlogin.php';
            echo "<script type='text/javascript'>window.location='$ret'</script>";
        }
        $sql = "select fname,lname,email,img_path,status from `faculty` where email='" . $username . "' and password='" . $passcode . "';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_row($res);
            if($row[4]=='Approved')
            {
                $_SESSION['faculty'] = array('Fname'=>$row[0],'Lname'=> $row[1],'email'=> $row[2],'Dp'=> $row[3],'user'=> "faculty");
                header("Location:faculty.php");
            }
            else
            {
                $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Request for join us Faculty is not Approved. Please waite for the Email notification from the Administratir.');
                window.location='$ret'</script>";
            }
        } else {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('invalid username or password');
            window.location='$ret'</script>";
        }
    }
    ?>
    <!--faculty login check-->
    <!--faculty forgot check-->
    <?php 
    if (isset($_POST['facultyforgot'])) {
        $regemail = $_POST['email'];
        $sql = "select password,fname from `faculty` where email='$regemail';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_row($res);
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Hai... '+'".$row[1]."'+' Your Password is '+'".$row[0]."');
            window.location='$ret'</script>";
        } else {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('SORRY!, Your Email-id does not exist in our Data Base');
            window.location='$ret'</script>";
        }
    }
    ?>
    <!--faculty forgot check-->
<!--faculty-->

<!--admin-->
    <!--admin login check-->
    <?php
    if (isset($_POST['adminlogin'])) {
        $username = $_POST['user'];
        $passcode = $_POST['password'];
        $sql = "select fname,lname,email,img_path from `admin` where email='" . $username . "' and password='" . $passcode . "';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_row($res);
            $_SESSION['admin'] = array('Fname'=>$row[0],'Lname'=> $row[1],'email'=> $row[2],'Dp'=> $row[3],'user'=> "admin");
            header("Location:admin.php");
        } else {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('invalid username or password');
            window.location='$ret'</script>";
        }
    }
    ?>
    <!--admin login check-->
    <!--admin forgot check-->
    <?php 
    if (isset($_POST['adminforgot'])) {
        $regemail = $_POST['email'];
        $sql = "select password,fname from `admin` where email='$regemail';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_row($res);
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Hai... '+'".$row[1]."'+' Your Password is '+'".$row[0]."');
            window.location='$ret'</script>";
        } else {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('SORRY!, Your Email-id does not exist in our Data Base');
            window.location='$ret'</script>";
        }
    }
    ?>
    <!--admin forgot check-->
<!--admin-->

<?php
    if (isset($_POST['chat'])) {
        $senderName=$_POST['senderName'];
        $senderEmail=$_POST['senderEmail'];
        $senderDp=$_POST['senderDp'];
        $recieverName=$_POST['recieverName'];
        $recieverEmail=$_POST['recieverEmail'];
        $recieverDp=$_POST['recieverDp'];
        $cname=$_POST['cname'];
        $chatId=$_POST['chatId'];
        $user=$_POST['user'];

        //status changed to seen
        $sql5 = "select * from `chat` where `chatid`='$chatId' AND `recieverid`='$senderEmail';";
        $res5 = mysqli_query($conn, $sql5);
        while ($row5 = mysqli_fetch_assoc($res5))
        {
            $sql6 = "update `chat` set `status`='seen' where `id`='".$row5['id']."';";
            $res6 = mysqli_query($conn, $sql6);
        }
        //status changed to seen
        
        if($user == 'student')
        {
            $_SESSION['schat'] = array('senderName'=>$senderName,'senderEmail'=> $senderEmail,'senderDp'=> $senderDp,'recieverName'=>$recieverName,'recieverEmail'=> $recieverEmail,'recieverDp'=> $recieverDp,'cname'=> $cname,'chatId'=> $chatId);
            header("Location:schatroom.php");
        }
        else if($user == 'faculty')
        {
            $_SESSION['fchat'] = array('senderName'=>$senderName,'senderEmail'=> $senderEmail,'senderDp'=> $senderDp,'recieverName'=>$recieverName,'recieverEmail'=> $recieverEmail,'recieverDp'=> $recieverDp,'cname'=> $cname,'chatId'=> $chatId);
            header("Location:fchatroom.php");
        }
    }
?>

<?php
    if (isset($_POST['generate'])) {
        $quizcode=$_POST['quizid'];
        $cname=$_POST['course'];
        $sql = "select * from `quiz` where `quizid`='$quizcode';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) >= 1) 
        {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Quiz code : $quizcode is already Exist. Please choose another code');
            window.location='$ret'</script>";
        }
        else
        {
            $_SESSION['quiz'] = array('quizcode'=>$quizcode,'cname'=> $cname,'qno'=>1);
            header("Location:quizgenerator.php");
        }
    }
?>


