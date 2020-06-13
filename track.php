<?php
session_start();
require "config.php" ;

?>

<!DOCTYPE html>


<html>
    <head>
    
       <title>Solve Grievance</title>
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

    
    <form class="frame"   method="post" enctype="multipart/form-data">

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: url('assets/img/cropped-header.png');">
    <div class="container"><a href="#" class="navbar-brand" style="color: rgb(255,255,255);">Solve Grievance</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"></span><a href="index.php" role="button">Log Out</a></div>
    </div>
</nav>
    <div class="contact-clean" style="background-color: rgba(255,255,255,0.50);">
        <form >
            
   <div class="form-group">
       
       <?php 
         
       
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
      }
       else
        if($leve=="department")
        {
        $query="Select * from grievdept where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);

//            echo "Complaint Description";
  //          echo "<br>";
    //        echo $row1['comp_desc'];
        
        
     
      echo '<p>Grievance Id:</p>';
        
       echo '<label class="form-control">'.$row1['comp_id'].'</label>';
      
        echo '<p>Department Id:</p>';
        
         echo '<label class="form-control">'.$row1['dept_id'].'</label>';
       
            echo '<p>Category:</p>';
        
       
       echo '<label class="form-control">'.$row1['category'].'</label>';
       
       echo '<p>Description:</p>';
        
       echo '<label class="form-control">'.$row1['comp_desc'].'</label>';
        }
       else
        if($leve=="university")
        {
        $query="Select * from grievuniv where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);


        
     echo '<p>Grievance Id:</p>';
        
       echo '<label class="form-control">'.$row1['comp_id'].'</label>';
      
        echo '<p>University Id:</p>';
        
         echo '<label class="form-control">'.$row1['univ_id'].'</label>';
       
            echo '<p>Category:</p>';
        
       
       echo '<label class="form-control">'.$row1['category'].'</label>';
       
       echo '<p>Description:</p>';
        
       echo '<label class="form-control">'.$row1['comp_desc'].'</label>';
      }
       ?>
            </div>
            
            
    <div class="form-group">
        <p>Comments</p>
            
        <textarea  rows="14" name="comment" placeholder="Comment Box" value="<?php echo isset($_POST['comment']) ? $_POST['comment'] : '' ?>" class="form-control"></textarea>
            </div>
            
            
            <div class="form-group">    
    <div class="form-group"><button name="sub" class="btn btn-primary" type="submit">send </button></div>
            </div>
            
            
    <div class="form-group">    
        <p>Forward to</p>
        <p> level:</p>
        <input list="host" name="lovel" value="<?php echo isset($_POST['lovel']) ? $_POST['lovel'] : '' ?>" class="form-control">
        <datalist id="host">
                <option value="university">
                <option value="institute">
                <option value="department">
                
                </datalist>
       <div class="form-group"><button name="enter" class="btn btn-primary" type="">enter </button></div>
        
        <?php
        
       
        
        
        if(isset($_POST['enter']))
        {
        $lev=$_POST['lovel'];
          
        if($lev=="university")
        {
            echo '<p>enter university:</p>';
        echo '<input type=text name="univfor" class="form-control">';
        }
        else  
        if($lev=="institute")
        {
                echo '<p>enter university:</p>';
        echo '<input type=text name="univfor" class="form-control">';
        
            echo '<p>enter institute:</p>';
        echo '<input type=text name="insfor" class="form-control">';
        }
        else  
        if($lev=="department")
        {
            echo '<p>enter institute:</p>';
        echo '<input type=text name="insfor" class="form-control">';
        
            echo '<p>enter department:</p>';
        echo '<input type=text name="depfor" class="form-control">';
        }
        }
        ?>
    
        <div class="form-group"><button name="forward" class="btn btn-primary" type="submit">Forward</button></div>
            </div>
    
            <div class="form-group">    
    <div class="form-group"><button name="revert" class="btn btn-primary" type="submit">Revert</button></div>
            </div>
    <div class="form-group">    
    <div class="form-group"><button name="done" class="btn btn-primary" type="submit">mark resolved</button></div>
            </div>
            
            
        </form>
            </div>
        

            
            <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    
        
    <?php 
    
           $leve=$_GET['lev'];
        $cmpp= $_GET['cmp'];
    
        
        
        if(isset($_POST['sub']))
        {
        
        
        $comm=$_POST['comment'];
        
            
            if($leve=="department")
            {
                $query2= "Update grievdept set comment='$comm' where comp_id='$cmpp'";
                    $query_run=mysqli_query($con,$query2);
        
            }
            else  if($leve=="institute")
            {
                $query2= "Update grievins set comment='$comm' where comp_id='$cmpp'";
                $query_run=mysqli_query($con,$query2);
        
            }
            else  if($leve=="university")
            {
                $query2= "Update grievuniv set comment='$comm' where comp_id='$cmpp'";
                $query_run=mysqli_query($con,$query2);
        
            }
        }
        
        if(isset($_POST['forward']))
        {
            $row1;
            
            
            $for=$_POST['lovel'];
        
            
            
            if($leve=="institute")
        {
        $query="Select * from grievins where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);
                
                    $query2= "Update grievins set sent='$for' where comp_id='$cmpp'";
                $query_run=mysqli_query($con,$query2);
        
            }
            else if($leve=="department")
        {
        $query="Select * from grievdept where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);
            
                $query2= "Update grievdept set sent='$for' where comp_id='$cmpp'";
                $query_run=mysqli_query($con,$query2);
        
            }
            else if($leve=="university")
        {
        $query="Select * from grievuniv where comp_id='$cmpp'";
                     $query_run= mysqli_query($con,$query);
        $row1=mysqli_fetch_array($query_run);
            
                $query2= "Update grievuniv set sent='$for' where comp_id='$cmpp'";
                $query_run=mysqli_query($con,$query2);
        
            }
            
            
    $category=$row1['category'];
        $textar=$row1['comp_desc'];
        $comm=$row1['comment'];
            
            
        
        
            echo $row1['comment'];
            
            
          
            if($for=="department")
            {
            $dept=$_POST['depfor'];  
            $ins=$_POST['insfor'];
            
                
                $query="insert into grievdept values('$cmpp','$ins','$dept','$category','$textar','$comm','department','')";
                $query_run=mysqli_query($con,$query);
         
            }
            else  if($for=="institute")
            {
            $univ=$_POST['univfor'];  
            $ins=$_POST['insfor'];
            
                
                $query="insert into grievins values('$cmpp','$ins','$univ','$category','$textar','$comm','institute','')";
            $query_run=mysqli_query($con,$query);
            
            }
            else  if($for=="university")
            {
             $univ=$_POST['univfor'];  
            
                
                $query="insert into grievuniv values('$cmpp','$univ','$category','$textar','$comm','university','')";
            $query_run=mysqli_query($con,$query);
        
            }
            
        }
        
        
        if(isset($_POST['revert']))
        {
            
            
        }
        
        
        if(isset($_POST['done']))
        {
            
            
        }
        
        ?>
    
    
    
    
    
    
      
        </form>
    
    
    
    </body>

</html>