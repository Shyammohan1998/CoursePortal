<?php
include 'DBconnection.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_GET['id']))
{
    $code=$_GET['id'];
    $email=$_GET['user'];
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
    <title>Quiz</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="assets/css/style-signup.css" rel='stylesheet' type='text/css' media="all">
    <style type="text/css">
        #input {
            margin: 30px;
        }
    </style>
</head>

<body style="background-color: rgb(213, 249, 255);" onload="hidder();">
    <div style="position:fixed;width:100%;background-color: rgb(213, 249, 255);"><br>
    <div class="hotel-bothside" style="background-color: white;margin-bottom:15px;">
        <center>
        <?php 
            $sql = "select * from `quiz` where `quizid`='$code';";
            $sql2 = "select count(*) from `quiz` where `quizid`='$code';";
            $res = mysqli_query($conn, $sql);
            $res2 = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_row($res);
            $count = mysqli_fetch_row($res2);
            $crs=$row[2];
            $total=$row[11]*$count[0];
            $mrk=$row[11];
        ?>
        <p style="font-size:30px;color:black;font-weight:bold;"><U>Quiz</U></p>
        <div class="time" id="navbar">Time left :<span id="timer"></span></div>
        <button class="btn btn-primary" id="mybut" onclick="myFunction()">START QUIZ</button><br><a href="student.php">Back</a>
        <p id="mypara" style="color:black">This quiz contain <span style="font-weight:bold;"><?php echo $count[0] ;?></span> Questions and corresponding 4 choice of answers. select the right choice. Each question carry mark of <span style="font-weight:bold;"><?php echo $row[11] ;?></span></p>
        </center>
        <p style="float: left;color:black;font-weight:bold;">Course : <?php echo $crs ;?></p><p style="float: right;color:black;font-weight:bold;">Total mark : <?php echo $total ;?></p>
    </div></div><br>
    <div id="myDIV">
    <form action="" method=post autocomplete="off" >
        <?php
            $sql = "select * from `quiz` where `quizid`='$code';";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) >= 1) {
                echo "<br><br><br><br><br><br><br><br><br>";
                while ($row = mysqli_fetch_assoc($res)) 
                {
                    echo "<div class='hotel-bothside' style='background-color: white;'>
                        <div class='form-add-to-w3ls add container'>
                            <p>";echo $row['qno']," . ",$row['qstn']; echo "</p>
                        </div>
                        <div class='mid-cls'>
                            <div class='hotel-left-w3ls'>
                                <div class='form-left-to-w3l'>
                                    <input type='radio' name='";echo $row['qno'];echo "' id='input' value='";echo $row['optn1']; echo "'>";echo $row['optn1']; echo "</input>
                                    <div class='clear'></div>
                                </div>
                            </div>
                            <div class='hotel-right-w3ls'>
                                <div class='form-add-to-w3ls add'>
                                    <div class='form-left-to-w3l'>
                                        <input type='radio' name='";echo $row['qno'];echo "' id='input' value='";echo $row['optn2']; echo "'>";echo $row['optn2']; echo "</input>
                                        <div class='clear'></div>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        <div class='mid-cls'>
                            <div class='hotel-left-w3ls'>
                                <div class=form-left-to-w3l'>
                                    <input type='radio' name='";echo $row['qno'];echo "' id='input' value='";echo $row['optn3']; echo "'>";echo $row['optn3']; echo "</input>
                                    <div class='clear'></div>
                                </div>
                            </div>
                            <div class='hotel-right-w3ls'>
                                <div class='form-add-to-w3ls add'>
                                    <div class='form-left-to-w3l'>
                                        <input type='radio' name='";echo $row['qno'];echo "' id='input' value='";echo $row['optn4']; echo "'>";echo $row['optn4']; echo "</input>
                                        <div class='clear'></div>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div><br>";
                }
            }
        ?>

        <div class="hotel-bothside" style="background-color: white;">
            <div class="mid-cls">
                <div class="hotel-left-w3ls">
                    
                </div>
                <div class="hotel-right-w3ls">
                    <div class="main">
                        <div class="form-left-to-w3l">
                            <div class="bttn">
                                <button type='reset' class='btn btn-primary' data-toggle='modal' data-target='#timerset'>clear</button>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-left-to-w3l">
                            <div class="bttn">
                                <button type="submit" class="btn btn-primary" id="sbmt" name="submit">Save</button>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
    </form>
    </div>


    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        var b = document.getElementById("mybut");
        var a = document.getElementById("back");
        var y = document.getElementById("mypara");
        y.style.display = "none";
        if (x.style.display === "none") { 
            b.style.visibility = 'hidden';
            x.style.display = "block";
            startTimer();
        }
    }
    window.onload = function() {
    document.getElementById('myDIV').style.display = 'none';
    document.getElementById('mypara').style.display = 'block';
    };
</script>
<?php
    $fetchtime = "select `timer` from `quiz` where `quizid`='$code'";
	$fetched = mysqli_query($conn,$fetchtime);
	$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
	$settime = $time['timer'];		
?>
<script type="text/javascript">
 
 document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
   //03 + ":" + 00 ;
  
  
 function startTimer() {
   var presentTime = document.getElementById('timer').innerHTML;
   var timeArray = presentTime.split(/[:]+/);
   var m = timeArray[0];
   var s = checkSecond((timeArray[1] - 1));
   if(s==59){m=m-1;}
   if(m==0){document.getElementById('timer').style.color='red';}
   if(m==0 && s==0){alert('stop it');$(document).ready(function(){$("#sbmt").click();});}
   document.getElementById('timer').innerHTML = m + ":" + s;
   setTimeout(startTimer, 1000);
 }
  
 function checkSecond(sec) {
   if (sec < 10 && sec >= 0) {sec = "0" + sec;} // add zero in front of numbers < 10
   if (sec < 0) {sec = "59";}
   return sec;
   if(sec == 0 && m == 0){ alert('stop it');}
 }
 </script>
</body>
<!--Quiz result popup-->
<div class='modal fade' id='result' role='dialog'>
    <div class='modal-dialog modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-body' style='text-align: center;'>
                <img src='assets/images/cngts.png' class='img-responsive' alt='' style='height: 200px;'><br>
                <!--quiz submission-->
                <?php
                    if(isset($_POST['submit'])){
                        $_SESSION['score'] = 0;
                        $sql0 = "update `quiz` set `userans`=' ';"; 
                        $query=mysqli_query($conn,$sql0);

                        $sql = "select * from `quiz` where `quizid`='$code';";
                        $qry=mysqli_query($conn,$sql);
                        $num=mysqli_num_rows($qry);
                        $i=1;
                        for($i;$i<=$num;$i++){
                            $userselected = $_POST[$i];
                            $sql2 = "update `quiz` set `userans`='$userselected' where `qno`=$i AND `quizid`='$code';"; 
                            $query=mysqli_query($conn,$sql2);
                        }
                        $sql3 = "select `ans`, `userans` from `quiz` where `quizid`='$code';";
                        $res = mysqli_query($conn,$sql3);
                        while ($row = mysqli_fetch_assoc($res))
                        {
                            if($row['ans']==$row['userans']){
                                $_SESSION['score'] += 1 ;
                            }
                        }
                        $score=$_SESSION['score']*$mrk;
                        $sql4 = "select * from `scoreboard` where `quizcode`='$code' AND `email`='$email';";
                        $res4 = mysqli_query($conn,$sql4);
                        if (mysqli_num_rows($res4) >= 1) 
                        {
                            $sql5 = "update `scoreboard` set `mark`='".$score."' where `quizcode`='$code' AND `email`='$email';"; 
                            $res5 = mysqli_query($conn,$sql5);
                        }
                        else
                        {
                            $sql5 = "insert into `scoreboard`(`email`,`quizcode`,`mark`,`course`) values ('".$email."','".$code."','".$score."','".$crs."');";
                            $res5 = mysqli_query($conn,$sql5);
                        }
                        echo "<script>$('#result').modal('show')</script>";
                    }
                ?>
                <!--quiz submission-->
                <span style="font-weight:bold;font-style:italic">No. of Correct Answer : <?php echo $_SESSION['score']; ?><br>
                Your Score : <?php echo $score; ?></span>
            </div>
            <div class='modal-footer'>
                <div class='col-12 text-center'>
                    <a href='student.php'  class='btn btn-outline-primary'>Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Quiz result popup-->
</html>



