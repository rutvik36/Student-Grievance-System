<?php
session_start();
require "config.php" ;
?>
<html>

<head>
    <link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"> 
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(88470)</script> 

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Authority login</title>
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

    <div class="register-photo" style="background-color: rgba(255,255,255,0.00);">
        <div class="form-container">
            <div class="image-holder"></div><form method="post">
    <h2 class="text-center"><strong>Admin Log In</strong></h2>
    <div class="form-group"><input class="form-control" type="text" name="email" placeholder="username" /></div>
    <div class="form-group"><input class="form-control" list="host3" name="level2" placeholder="Level" /></div>
    <datalist id="host3">
                <option value="university">
                <option value="institute">
                <option value="department">
                
                </datalist>
        
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
    
    <div class="form-group">
        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" />I agree to the license terms.</label></div>
    </div>
    <div class="form-group"><input name="login" type="submit" class="btn btn-primary" value="Login"/>
      </div></form></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>

    <?php
    if(isset($_POST['login']))
        {
            $username=$_POST['email'];
            $password=$_POST['password'];
            $level=$_POST['level2'];
        
            $query="select * from admin WHERE username='$username' AND password='$password' ";
            
            $query_run= mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                $_SESSION['aduser']= $username;
                $_SESSION['l2']= $level;
                
                header('location:grievfac.php');
            }
            else
            {
                                        echo '<script type="text/javascript"> alert("user doesnot exist!!") </script>';
        
            }
        }
?></body>

</html>