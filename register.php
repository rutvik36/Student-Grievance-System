<?php
 require "config.php" ;

?>

<!DOCTYPE html>
<html>

<head>

    <link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css">
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(88470)</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student register</title>
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

    <form  action="register.php" method="post" onsubmit= "return form_val();">

    <nav class="navbar navbar-light navbar-expand-md text-center navigation-clean-button" style="background-image: url(&quot;assets/img/cropped-header.png&quot;);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Students Redressal Portal</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"> </span></div>
        </div>
    </nav><form name = "regform" action="grievlist.php" method="post" onsubmit=" return form_val();">
    <h2 class="text-center">Student Registration</h2>
    <br>
    <br>
    <div class="form-group"><input required type="text" pattern="[A-Za-z]{3,}" name="username" placeholder="User ID" class="form-control" /><br>
        <input required type="text" pattern="[A-Z a-z]{3,}" name="name" placeholder="Name" class="form-control" /></div>

      <div class="form-group"><input required type="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" placeholder="Email-ID" class="form-control" /><br>
        <div id="error"></div>
        <input required type="number" name="mobile" placeholder="Mobile No" class="form-control" /></div>
        <div id="error"></div>
      <div class="form-group"><input required type="text" name="univ" placeholder="University Name" class="form-control" /><br>
        <div id="error"></div>
        <input required type="text" pattern="[A-Za-z]{3,}" name="inst" placeholder="College Name " class="form-control" /></div>
        <div id="error"></div>
      <div class="form-group"><input required type="text" pattern="[A-Za-z]{2,}" name="dept" placeholder="Dept Name" class="form-control" /><br>
        <div id="error"></div>
        <input required type="text" pattern="[A-Za-z]{1,}" name="gender" placeholder="Gender" class="form-control" /></div>
        <div id="error"></div>
      <div class="form-group"><input required type="date" name="dob" placeholder="DOB" class="form-control" /><br>
        <div id="error"></div>
        <input required type="password" name="password" placeholder="Password" class="form-control" /></div>
    <div class="form-group"><input required type="password" name="cpassword" placeholder="Confirm Password " class="form-control" /></div><br>
          <div class="form-group"><input required type="submit" name="submit" placeholder="Submit " class="form-control" /><br>
    </div>




</form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>


                <?php

            if(isset($_POST['submit']))
            {

                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                $name=$_POST['name'];
                    $mobile=$_POST['mobile'];
                    $dob=date('Y-m-d', strtotime($_POST['dob']));

                    $email=$_POST['email'];
                    $univ=$_POST['univ'];
                    $inst=$_POST['inst'];
                    $dept=$_POST['dept'];
                    $gen=$_POST['gender'];



                if($password == $cpassword)
                {
                    $query= "select * from userinfo WHERE username= '$username' ";
                    $query_run= mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        echo '<script type="text/javascript"> alert("user already exists") </script>';

                    }
                    else
                    {   $password = md5($password);
                        $query= "insert into userinfo values('$username','$password','$name','$email','$mobile','$univ','$inst','$dept','$gen','$dob')";
                        $query_run=mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("user registered.. go to login page") </script>';

                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("error!!") </script>';

                        }
                    }
                }
                else{
                                echo '<script type="text/javascript"> alert("retype confirmation failed") </script>';

                }

            }

            ?>
    </form>
    <script type="text/JavaScript">
    alert("hiiiii");
    function form_val()
    {alert("heyyy");

    usename=document.regform.name.value;
    console.log(usename);
    alert(usename);
    var letters = /^[A-Za-z]+$/;
    var uid_len = uid.value.length;
    if(!usename.value.match(letters))
    {
      alert("Enter valid username");
      document.getElementById("use1").innerHTML="enter valid usename";
      document.getElementById("use1").style.color="red";
      return false;

    }
    mail=document.regform.email;
    if( email.value == "" || email.value.indexOf( "@" ) == -1 )
     {
        alert("Enter valid email");
      return false;
     }
    no=document.regform.mobile;
    console.log(usename);
    console.log(mail)
    return true;
    }

    </script>
</body>

</html>
