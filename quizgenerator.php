<?php 
include 'DBconnection.php';
session_start();
if(isset($_SESSION['quiz']))
{
    $cname=$_SESSION['quiz']['cname'];
    $quizcode=$_SESSION['quiz']['quizcode'];
    $qno=$_SESSION['quiz']['qno'];
}
else
{
    echo "<br><center><h2>Unautherized User. Access Denied.</h2></center>";
    die;
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/logo-icon.png" type="image/png">
    <title>Quiz Generator</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="assets/css/style-signup.css" rel='stylesheet' type='text/css' media="all">
    <style type="text/css">
     #input{
        width: 60%; 
        margin-top:20px;
    }
    .mybutton{
        width: 100%;
        height: 48px;
        color: white;
        border-color: rgb(57, 117, 163);
        background-color: rgb(57, 117, 163);
    }
    </style>
</head>

<body style="background-color: rgb(213, 249, 255);">
    
    <!-- contact form -->
    <br><br><br><br>
    <div class="hotel-bothside">
        <div class="header-section text-center"><br>
            
            <h3 class="mb-md-5 mb-4">Add Question</h3>
            <span style="float: left;"><p>Quiz Code : <?php echo $quizcode;?></p></span>
            <span style="float: right;"><p>Course : <?php echo $cname;?></p></span>
        </div>
        <br>
		<form action="" method="post"  autocomplete="off" >
            <div class="form-add-to-w3ls add">
                
                <input type="text" name="qstn" placeholder="Question <?php echo $qno;?>" required="" title="Enter Your Question">
                <div class="clear"></div>
            </div>
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                        <input type="text" name="optn1" placeholder="Option 1" required="" title="Enter 1st wrong Answer">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">
						<div class="form-left-to-w3l">
							<input type="text" name="optn2" placeholder="Option 2" required="" title="Enter 2nd wrong Answer">
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                        <input type="text" name="optn3" placeholder="Option 3" required="" title="Enter 3rd wrong Answer">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hotel-right-w3ls">
                    <div class="form-add-to-w3ls add">
						<div class="form-left-to-w3l">
							<input type="text" name="optn4" placeholder="Option 4" required="" title="Enter 4th wrong Answer">
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    <div class="form-left-to-w3l">
                        <input type="text" name="crct" placeholder="Correct Answer" required="" title="Enter Correct Answer">
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="hotel-right-w3ls">
                    <div class="main">
                        <div class="form-left-to-w3l">
                            <div class="bttn">
                                <?php 
                                    if($qno > 1)
                                    {
                                        echo "<button type='button' class='btn btn-primary mybutton' data-toggle='modal' data-target='#timerset'>FINISH</button>";
                                    }
                                ?>
                            </div>
						    <div class="clear"></div>
                        </div>
                        <div class="form-left-to-w3l">
                            <div class="bttn">
                                <button type="submit" class="btn btn-primary" name="submit">Save</button>
                            </div>
						    <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
		</form>
    </div><br><br>
    
    <!-- //contact form -->
   

    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Template JavaScript -->
</body>
</html>

<!--timer set popup-->
<div class="modal fade" id="timerset" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Finish Your Quiz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" autocomplete="off">
            <div class="form-group" style="text-align: center;">
            You have successfully save <?php echo $qno-1 ;?> Question and Answers.<br>please set the mark and Time for your Quiz<br>
              <input type="text" name="mrk" class="contact-input" placeholder="Mark of each Question" required="" id="input" title="Enter mark of each question" />
              <input type="digit" name="min" class="contact-input" placeholder="Minuts" required="" id="input" title="Enter time minuts" />
              <input type="digit" name="sec" class="contact-input" placeholder="seconds" required="" id="input" title="Enter time seconds" />
              <button type="submit" id="input" class="btn btn-primary" name="timesubmit">Complete</button><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--timer set popup-->

<?php 
    if(isset($_POST['submit'])){
        $qstn = $_POST['qstn'];
        $ans = $_POST['crct'];
        $wans1 = $_POST['optn1'];
        $wans2 = $_POST['optn2'];
        $wans3 = $_POST['optn3'];
        $wans4 = $_POST['optn4'];
        $sql = "insert into `quiz`(`quizid`,`course`,`qno`, `qstn`, `optn1`, `optn2`, `optn3`, `optn4`, `ans`) values ('".$quizcode."','".$cname."','".$qno."','".$qstn."','".$wans1."','".$wans2."','".$wans3."','".$wans4."','".$ans."');";
        $query = mysqli_query($conn, $sql);
        if($query){
            $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Question and Answers Sumbmitted Succesfully');
                window.location='$ret'</script>";
                $_SESSION['quiz']['qno']+=1;
        }
        else{
            $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Process failed');
                window.location='$ret'</script>";
        }
    }

    if(isset($_POST['timesubmit'])){
        $mrk = $_POST['mrk'];
        $min = $_POST['min'];
        $sec = $_POST['sec'];
        $timer=$min.':'.$sec;
        $sql = "update `quiz` set `timer` = '$timer',`mark` = '$mrk' where `quizid` = '$quizcode';";
        $query = mysqli_query($conn, $sql);
        if($query){
            $sql4 = "select `tnqz` from `course` where `title`='$cname';";
            $qry = mysqli_query($conn,$sql4);
            while ($row4 = mysqli_fetch_assoc($qry)) 
            {
                $cnt=$row4['tnqz']+1;
                $sql5 = "update `course` set `tnqz`='".$cnt."' where `title`='$cname';";
                $qry5 = mysqli_query($conn,$sql5);
            }

            $ret='faculty.php';
                echo "<script type='text/javascript'>alert('Your Quiz is ready');
                window.location='$ret'</script>";
        }
        else{
            $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Process failed');
                window.location='$ret'</script>";
        }
    }
?>