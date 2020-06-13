<?php
session_start();
require "config.php" ;
?>
<html>
    <head>
           <title>Grievance Register</title>
<link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css">
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(88470)</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Authority1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">


    </head>



<body>

    <script> Init('?botID=4989&appID=rvK8PWPvUKMWzf5lpiKu', 600, 600, 'http://media.snatchbot.s3-website-us-east-1.amazonaws.com/media/image/15079350484a5z7DzujU', 'bubble', '#00AFF0', 90, 90, 62.99999999999999, '', '0'); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script>


    <form class="frame" action="grievance2.php" method="post" enctype="multipart/form-data">

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: url('assets/img/cropped-header.png');">
    <div class="container"><a href="#" class="navbar-brand" style="color: rgb(255,255,255);">Students Redressal Portal</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"></span><a href="index.php" role="button">Log Out</a></div>
    </div>
</nav>
    <div class="contact-clean" style="background-color: rgba(255,255,255,0.50);">
        <form method="post">
    <h2 class="text-center">Register Complaint</h2>
    <div class="form-group"><input list="host" name="level" placeholder="Level" class="form-control" /><datalist id="host">
                <option value="University">
                <option value="Institute">
                <option value="Department">

                </datalist><br>
        <input list="host2" name="category" placeholder="Category" class="form-control" />
            <datalist id="host2">
                <option value="finance">
                <option value="exam">
                <option value="admission">
                <option value="timetable">

                </datalist>
        </div>
    <div class="form-group"><textarea name="textar" rows="14" name="message" placeholder="Description Box" class="form-control"></textarea>
        <br><div style="display:flex;flex-direction:row;justify-content:center;align-items:left;margin-bottom:10px;">
                <label style="margin-left:50px;margin-top:10px;"><b>Upload_file</b></label>

        <input  type="file" name="sfile" id="fileb" />

        </div>
    <div class="form-group"><button name="submit" class="btn btn-primary" type="submit">send</button></div>
            </div>


        </form>
            </div>



            <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
<?php
        $loc="";
        $fname="";
        if(isset($_FILES['sfile']))
               {
    $level=$_POST['level'];
            if($level=="University")
            {
                  $fname=$_FILES['sfile']['name'];

            $loc="C:/xampp/htdocs/SIH/media/University/".$_FILES['sfile']['name'];
        move_uploaded_file($_FILES['sfile']['tmp_name'], $loc);


            }
            else if($level=="Institute"){
                  $fname=$_FILES['sfile']['name'];

            $loc="C:/xampp/htdocs/SIH/media/Institute/".$_FILES['sfile']['name'];
        move_uploaded_file($_FILES['sfile']['tmp_name'], $loc);


            }
            else if($level=="Department"){
                  $fname=$_FILES['sfile']['name'];

            $loc="C:/xampp/htdocs/SIH/media/Department/".$_FILES['sfile']['name'];
        move_uploaded_file($_FILES['sfile']['tmp_name'], $loc);


            }
        }



if(isset($_POST['list']))
               {
           header('location:grievlist.php');
        }
        if(isset($_POST['submit']))
               {

    $level=$_POST['level'];
    $category=$_POST['category'];
        $textar=$_POST['textar'];
        $stdid=$_SESSION['username'];
            $univ="pune";

$stud_id=ord("$stdid");
$cat=substr("$category",0,2);

function random_strings($length_of_string)
{

    // String of all alphanumeric character
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    // Shufle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result),
                       0, $length_of_string);
}

// This function will generate
// Random string of length 10
$random= random_strings(8);
$cmpid=$stud_id.$cat.$random;



            $query= "insert into std_cmp values('$stdid','$cmpid','$level')";
            $query_run=mysqli_query($con,$query);


            if($level=="University")
            {


                $query1= "insert into grievuniv values('$cmpid','$univ','$category','$textar','','','')";


            $query_run1=mysqli_query($con,$query1);

                        if($query_run1)
                        {

                            echo "<script type='text/javascript'> alert('$cmpid') </script>";

                        }else
                        {
            echo '<script type="text/javascript"> alert("upload failed!!") </script>';

                        }



            }
            else if($level=="Institute")
            {

            $query= "Select institute from userinfo where username='$stdid'";


            $iid=mysqli_query($con,$query);
                $row1=mysqli_fetch_assoc($iid);
                $iid=$row1['institute'];
            $query2= "insert into grievins values('$cmpid','$iid','$univ','$category','$textar','','','')";


            $query_run=mysqli_query($con,$query2);

                        if($query_run)
                        {

                            echo "<script type='text/javascript'> alert('$cmpid') </script>";

                        }else
                        {
            echo '<script type="text/javascript"> alert("upload failed!!") </script>';

                        }

            }
            else if($level=="Department")
            {

            $query= "Select institute from studentdb where student_id='$stdid'";


            $iid=mysqli_query($con,$query);
         $row1=mysqli_fetch_assoc($iid);
                 $iid=$row1['institute'];


                $query= "Select department from studentdb where student_id='$stdid'";


            $iid2=mysqli_query($con,$query);
         $row1=mysqli_fetch_assoc($iid2);
                 $iid2=$row1['department'];

                $query= "insert into grievdept values('$cmpid','$iid','$iid2','$category','$textar','','','')";


            $query_run=mysqli_query($con,$query);

                        if($query_run)
                        {

                            echo "<script type='text/javascript'> alert('$cmpid') </script>";

                        }else
                        {
            echo '<script type="text/javascript"> alert("upload failed!!") </script>';

                        }

            }

                }


?></form>


    </body>

</html>
