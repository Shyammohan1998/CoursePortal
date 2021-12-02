<style type=text/css>
    .table1
    {
        width: 70%;
    }
    .tr
    {
        height: 50px;
        font-size: 17px;
    }
    .tdl
    {
        width: 50%;
        text-align:right;
        
    }
    .tdr
    {
        width: 50%;
        text-align:left;
        padding-left: 20px;
    }
    #input{
        width: 60%; 
        margin-top:20px;
    }
</style>
<?php
    require 'DBconnection.php';
    $sql = "select * from $tablename where email='" . $email . "';";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($res);
    if (mysqli_num_rows($res) == 1) {
        
        echo "<table class='table1'>
                <tr class='tr'>
                    <td class='tdl'>First Name</td>
                    <td class='tdr'>$row[1]</td>
                </tr>
                <tr  class='tr'>
                    <td class='tdl'>Last Name</td>
                    <td class='tdr'>$row[2]</td>
                </tr>
                <tr  class='tr'>
                    <td class='tdl'>Gender</td>
                    <td class='tdr'>$row[3]</td>
                </tr>
                <tr  class='tr'>
                    <td class='tdl'>Date of Birth</td>
                    <td class='tdr'>$row[4]</td>
                </tr>
                <tr  class='tr'>
                    <td class='tdl'>Address</td>
                    <td class='tdr'>$row[5]</td>
                </tr>
                <tr  class='tr'>
                    <td class='tdl'>Mobile No</td>
                    <td class='tdr'>$row[6]</td>
                </tr>
                <tr  class='tr'>
                    <td class='tdl'>Email</td>
                    <td class='tdr'>$row[7]</td>
                </tr>
            </table>";}
?>

<!--profile update popup-->
<div class="modal fade" id="profileupdate" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp;Update Your Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group" style="text-align: center;">
                            <input type="text" name="fname" class="contact-input" placeholder="First Name" required="" id="input" value="<?php echo $row[1]; ?>" autocomplete="none" />
                            <input type="text" name="lname" class="contact-input" placeholder="Last Name" required="" id="input" value="<?php echo $row[2]; ?>" autocomplete="none"/>
                            <select class="contact-input" required="" name="gender" id="input">
                                <option value="<?php echo $row[3]; ?>" selected hidden><?php echo $row[3]; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="text" name="dob" class="contact-input"  value="<?php echo $row[4]; ?>" required="" id="input" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="none">
                            <textarea name="address" class="contact-input" placeholder="Your Full Address" required="" id="input" autocomplete="none"><?php echo $row[5]; ?></textarea>
                            <input type="tel" class="contact-input" name="mobileno" placeholder="Mobile : +XX XXXXXXXXXX" pattern="[+][0-9]{2} [0-9]{10}" required="" id="input" value="<?php echo $row[6]; ?>" autocomplete="none">
                            <input type="email" class="contact-input" name="email" placeholder="Email Address" required="" title="This Email-Id as your Username" id="input"" value="<?php echo $row[7]; ?>" >
                            <button type="submit" class="btn btn-primary" id="input" name="profileupdate">Submit</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--profile update popup-->

<!--photo update popup-->
<div class="modal fade" id="photoupdate" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-11 modal-title text-center" style="font-size:30px; color:rgb(255, 115, 0)" id="exampleModalLongTitle">&nbsp;&nbsp; Update Your Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="form-group" style="text-align: center;">
                        <input type="text" class="contact-input" id="input" name="fileImg" placeholder="update Your Profile Photo" onfocus="(this.type='file')" title="please add profile phicture">
                            <button type="submit" id="input" class="btn btn-primary" name="photoupdate">Submit</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--photo update popup-->

<?php 
    if (isset($_POST['profileupdate'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        
        $sql = "update $tablename set `fname`='".$fname."',`lname`='".$lname."',`gender`='".$gender."',`dob`='".$dob."',`address`='".$address."',`mobile`='".$mobileno."',`email`='".$email."' where `id`=$row[0];";
        $query = mysqli_query($conn, $sql);
        if (!$query) {
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Updation Failed');
                window.location='$ret'</script>";
        }
        else{
            $_SESSION[$tablename]['Fname'] = $fname;
            $_SESSION[$tablename]['Lname'] = $lname;
            $_SESSION[$tablename]['email'] = $email;
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Updation success');
                window.location='$ret'</script>";
        }
    }
?>

<?php 
    if (isset($_POST['photoupdate'])) 
    {
        $file_tmp=$_FILES["fileImg"]["tmp_name"];
        $file_name=$_FILES["fileImg"]["name"];
        $image_name=$row[1];
        $file_path="profile-photo/".$file_name;
        if(file_exists($file_path)){
            $ret=$_SERVER['HTTP_REFERER'];
            echo "<script type='text/javascript'>alert('Sorry! $file_name image is alreadyexist.');
                window.location='$ret'</script>";
        }
        else
        {
            $sql = "update $tablename set `img_name`='".$image_name."',`img_path`='".$file_path."' where `id`=$row[0];";
            $query = mysqli_query($conn, $sql);
            move_uploaded_file($file_tmp,$file_path);
            if (!$query) {
                $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Updation Failed');
                    window.location='$ret'</script>";
            }
            else
            {
                $_SESSION[$tablename]['Dp'] = $file_path;
                $ret=$_SERVER['HTTP_REFERER'];
                echo "<script type='text/javascript'>alert('Photo Updated');
                    window.location='$ret'</script>";
            }
        }
    }
?>