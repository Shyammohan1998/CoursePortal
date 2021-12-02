<?php 
include 'DBconnection.php';
session_start();
if(isset($_SESSION['schat']))
{
    $senderName=$_SESSION['schat']['senderName'];
    $senderEmail=$_SESSION['schat']['senderEmail'];
    $senderDp=$_SESSION['schat']['senderDp'];
    $recieverName=$_SESSION['schat']['recieverName'];
    $recieverEmail=$_SESSION['schat']['recieverEmail'];
    $recieverDp=$_SESSION['schat']['recieverDp'];
    $cname=$_SESSION['schat']['cname'];
    $chatId=$_SESSION['schat']['chatId'];
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
    <title>ChatRoom</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        .container-left {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            width: 70%;
            margin: 10px 0;
            float: left;
        }

        .container-right {
            border: 2px solid #dedede;
            border-color: #ccc;
            background-color: #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            width: 70%;
            float: right;
        }

        .container-left::after {
            content: "";
            clear: both;
            display: table;
        }

        .container-left img {
            float: left;
            border: 2px solid #dedede;
            max-width: 60px;
            width: 100%;
            height: 60px;
            border-color: #ccc;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container-right img {
            float: right;
            border: 2px solid #ccc;
            max-width: 60px;
            max-height: 60px;
            width: 100%;
            height: 60px;
            margin-left: 20px;
            border-radius: 50%;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }
        .hide-scroll::-webkit-scrollbar
        {
            display: none;
        }
    </style>
</head>

<body style="background-color: rgb(213, 249, 255);" class="hide-scroll">
    <!-- contact form -->
    <section class="w3l-contacts-12" id="contact">
        <div class="py-5">
            <div class="contacts12-main" style="background-color: aqua;border-radius: 20px;height:666px; width: 90%; padding: 3px;">
                <div class="header-section text-center">
                    <p style="float:left;margin:7px;margin-top:18px;"><a href="logout.php" onclick="location.href=this.href+'?user='+'schat';return false;"><span class="fa fa-arrow-left"></a></span></p>
                    <img src=<?php  echo $recieverDp; ?> alt="Avatar" style="width: 60px; height:60px; border-radius:50%; float:left; margin:5px;">
                    <p style="float:left;margin-top:18px;"><?php  echo $recieverName," (",$cname,")"; ?></p>
                    <div style="float: right;">
                        <div style="float: right;">
                            <button onclick="inputShow();" style="float: right; background-color: transparent;border-color: transparent;margin-right:25px;margin-top:18px;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <div id="search" style="float: right;display:none; "><input style="height:30px;margin-right:25px;margin-top:18px;" type="search" id="mySearch" placeholder="Search..." class="form-control"></div>
                    </div>
                </div>
                <div id="mydiv" class="container hide-scroll" style="height:550px;background-color:white;overflow-y:scroll;">
                    <?php 
                        $sql = "select * from `chat` where `chatid`='$chatId';";
                        $res = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($res) >= 1) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                //echo $row['id'];
                                if($row['senderid']==$senderEmail)
                                {
                                    echo "<div class='container-right darker'>
                                        <img src='";echo $senderDp;; echo "'alt='Avatar' >
                                        <p>";echo $row['msg']; echo "</p>
                                        <span class='time-left'>";echo $row['timestamp']; echo "</span>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-check-all' viewBox='0 0 16 16' style='float:right;";if($row['status']=='seen'){echo 'color:blue';}echo "'>
                                            <path d='M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z'/>
                                        </svg>
                                    </div>";
                                }
                                else
                                {
                                    echo "<div class='container-left'>
                                        <img src='";echo $recieverDp; echo "'alt='Avatar'>
                                        <p>";echo $row['msg']; echo "</p>
                                        <span class='time-right'>";echo $row['timestamp']; echo "</span>
                                    </div>";
                                }
                            }
                        
                          }
                    ?>
                    
                </div>
                <div style="margin-top:4px;">
                    <form action="schatroom.php" method="post" autocomplete="off">
                        <input type="text" name="msg" placeholder="Type a message" class="contact-input" style="border-radius: 20px;height:10px; width:88%;float:left;" />
                        <button type="submit" name="send" class="btn-primary" style="border-radius: 20px;float:right;height:36px; width:12%;">send</button>
                    </form>
                </div>
            </div>
    </section>
    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        var x=document.getElementById("mydiv");
        x.scrollTop=x.scrollHeight;
    </script>
</body>
<script type="text/javascript">
    function inputShow() 
    {
        var x = document.getElementById("search");
        if (x.style.display == "none") 
        {
          x.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
        }
    }
    $(document).ready(function() {
        $("#mySearch").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#mydiv div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
</script>
</html>

<?php
if (isset($_POST['send'])) {
  $message = $_POST['msg'];
  //status changed to seen
  $sql5 = "select * from `chat` where `chatid`='$chatId' AND `recieverid`='$senderEmail';";
  $res5 = mysqli_query($conn, $sql5);
  while ($row5 = mysqli_fetch_assoc($res5))
  {
    $sql6 = "update `chat` set `status`='seen' where `id`='".$row5['id']."';";
    $res6 = mysqli_query($conn, $sql6);
  }
  if($message)
  {
    $sql = "select TIME_FORMAT(CURRENT_TIME,'%h:%i');";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($res);
    //echo $row[0]; 
    $sql = "insert into `chat`(`chatid`,`senderid`,`recieverid`,`coursename`,`msg`,`timestamp`) values ('" . $chatId . "','" . $senderEmail . "','" . $recieverEmail . "','" . $cname . "','" . $message . "','" . $row[0] . "');";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
      $ret = $_SERVER['HTTP_REFERER'];
      echo "<script type='text/javascript'>alert('message not sented');
                  window.location='$ret'</script>";
    }
    else
    {
        $ret = $_SERVER['HTTP_REFERER'];
        echo "<script type='text/javascript'>window.location='$ret'</script>";
    }
  }
}
?>