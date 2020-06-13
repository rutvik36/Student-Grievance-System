<?php
session_start();
require "config.php" ;
?><html>
    <head>
    
       <title>Grievance List</title>
        <link rel="stylesheet" href="style.css">
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

        
    
    <form class="myform" action="grievlist.php" method="post" enctype="multipart/form-data">
        
        
     
      <div class="form-group"><a href="grievance2.php" class="btn btn-primary">Register Grievance</a></div>  
	  <a href="logout.php" role="button">Log Out</a>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: url(&quot;assets/img/cropped-header.png&quot;);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">My Grievances</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"> </span></div>
        </div>
    </nav>
    
    <script
        src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>

        
<div class="tabl">
        <table id="t1" style="width:100%">
            <tr>
                <th>Comp_id</th>
                <th>Category</th>
                <th>Track</th>
            </tr>
<?php
   
     if(isset($_SESSION['username']))   
	 {
		 $stdid=$_SESSION['username'];
   echo $_SESSION['username'];
    $query="Select * from std_cmp where std_id='$stdid'";
        $cmp=mysqli_query($con,$query);
        
            
            while($row=mysqli_fetch_array($cmp)){
                
        $cmpid=$row['cmp_id'];
            
              
        if($row['level']=="Institute")
        {
  $query="SELECT * FROM grievins WHERE comp_id='$cmpid'";
            
            
              $query_run2= mysqli_query($con,$query);
                
        $row1=mysqli_fetch_array($query_run2);
           $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='stdtrack.php?cmp=$yz&lev=institute'>Track</a></td>";
  echo '</tr>';
            }
                else if($row['level']=="University")
                { $query="SELECT * FROM grievuniv WHERE comp_id='$cmpid'";
            
            
              $query_run1= mysqli_query($con,$query);
$row1=mysqli_fetch_array($query_run1);
                    
                  $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='stdtrack.php?cmp=$yz&lev=university'>Track</a></td>";
				echo '</tr>';
              
                }
                else if($row['level']=="Department")
                {
            $query="SELECT * FROM grievdept WHERE comp_id='$cmpid'";
            
            
              $query_run3= mysqli_query($con,$query);
    $row1=mysqli_fetch_array($query_run3);

                    $yz=$row1['comp_id'];
                 
				echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='stdtrack.php?cmp=$yz&lev=department'>Track</a></td>";
					echo '</tr>';
        
        
                }
                
                
            
                
                }
	 }
	 else
	 {
		 //echo '<script type="text/javascript"> alert("you must login first!!") </script>';
		 echo '<script type="text/javascript"> alert("you must login first!!");window.location.href = "index.php"; </script>';
							
	 }
?></table>
        </div>
    </form>
    
    </body>

</html>