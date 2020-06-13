<?php
session_start();
require "config.php" ;

?>

<!DOCTYPE html>


<html>
    <head>
    <link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"> 
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(88470)</script> 

       <title>Track Grievance</title>
        <link rel="stylesheet" href="style.css">
     
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

    
    <form class="frame"  method="post" enctype="multipart/form-data">

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: url('assets/img/cropped-header.png');">
    <div class="container"><a href="#" class="navbar-brand" style="color: rgb(255,255,255);">Track Grievance</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"></span><a href="logout.php" role="button">Log Out</a></div>
    </div>
</nav>
    <div class="contact-clean" style="background-color: rgba(255,255,255,0.50);">
        <form >
            
   <div class="form-group">
       
       <?php 
			//if(isset($_SESSION['username']))
				
     if(isset($_SESSION['username']))   
	 {
       echo $_SESSION['username'];
       $leve=$_GET['lev'];
        $cmpp= $_GET['cmp'];
       
       
        if($leve=="institute")
        {
        $query="Select * from grievins where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);

//            echo "Complaint Description";
  //          echo "<br>";
    //        echo $row1['comp_desc'];
        
        
      echo '<p>Grievance Id:</p>';
        
       echo '<label class="form-control">'.$row1['comp_id'].'</label>';
      
        echo '<p>Institute Id:</p>';
        
         echo '<label class="form-control">'.$row1['inst_id'].'</label>';
       
            echo '<p>Category:</p>';
        
       
       echo '<label class="form-control">'.$row1['category'].'</label>';
       
       echo '<p>Description:</p>';
        
       echo '<label class="form-control">'.$row1['comp_desc'].'</label>';
     
       echo '<p>Comment:</p>';
     echo '<label class="form-control">'.$row1['comment'].'</label>';
       echo '<p>forwarded to:</p>';
     echo '<label class="form-control">'.$row1['sent'].'</label>';
        
        }
       else
        if($leve=="department")
        {
        $query="Select * from grievdept where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);


     
      echo '<p>Grievance Id:</p>';
        
       echo '<label class="form-control">'.$row1['comp_id'].'</label>';
      
        echo '<p>Department Id:</p>';
        
         echo '<label class="form-control">'.$row1['dept_id'].'</label>';
       
            echo '<p>Category:</p>';
        
       
       echo '<label class="form-control">'.$row1['category'].'</label>';
       
       echo '<p>Description:</p>';
        
       echo '<label class="form-control">'.$row1['comp_desc'].'</label>';
        
          echo '<p>Comment:</p>';
     echo '<label class="form-control">'.$row1['comment'].'</label>';
       echo '<p>forwarded to:</p>';
     echo '<label class="form-control">'.$row1['sent'].'</label>';
        
        
        }
       else
        if($leve=="university")
        {
        $query="Select * from grieuniv where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);

//            echo "Complaint Description";
  //          echo "<br>";
    //        echo $row1['comp_desc'];
        
        
     echo '<p>Grievance Id:</p>';
        
       echo '<label class="form-control">'.$row1['comp_id'].'</label>';
      
        echo '<p>University Id:</p>';
        
         echo '<label class="form-control">'.$row1['univ_id'].'</label>';
       
            echo '<p>Category:</p>';
        
       
       echo '<label class="form-control">'.$row1['category'].'</label>';
       
       echo '<p>Description:</p>';
        
       echo '<label class="form-control">'.$row1['comp_desc'].'</label>';
       echo '<p>Comment:</p>';
     echo '<label class="form-control">'.$row1['comment'].'</label>';
       echo '<p>forwarded to:</p>';
     echo '<label class="form-control">'.$row1['sent'].'</label>';
        
        }
		
	 }
	 else
	 {
		 echo '<script type="text/javascript"> alert("you must login first!!");window.location.href = "index.php"; </script>';
							
	 }
       ?>
            </div>
            
            
           
        </form>
            </div>
        

            
            <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    
       
    
    
    
    
    
      
        </form>
    
    
    
    </body>

</html>