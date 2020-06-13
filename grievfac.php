<?php
session_start();
require "config.php" ;

?>
<html>
    <head>
    
       <title>Admin Grievance List</title>
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

                <style>
    .notification{
    background-color: #0f71ba;
    color: white;
    text-decoration: none;
    padding: 15px 26px;
    position: relative;
    display: inline-block;
    border-radius: 2px;
    
    
}


.notification:hover {
    
    background: lightblue;
    
}

.notification .badge{
    position: absolute;
    top: -10px;
    padding: 5px 10px;
    border-radius: 50%;
    background: red;
    color: white;
    
    
}
        </style>



    
        
        
        
    </head>
<body>
           

        <script> Init('?botID=4989&appID=rvK8PWPvUKMWzf5lpiKu', 600, 600, 'http://media.snatchbot.s3-website-us-east-1.amazonaws.com/media/image/15079350484a5z7DzujU', 'bubble', '#00AFF0', 90, 90, 62.99999999999999, '', '0'); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script>

    
    <form class="myform" action="grievfac.php" method="post" enctype="multipart/form-data">
<?php
        
   $stdid=$_SESSION['aduser'];
    $lev2=$_SESSION['l2'];
        
        $query="select organization from admininfo where username='$stdid'";
        $run=mysqli_query($con,$query);
           $row3=mysqli_fetch_array($run);
        $id=$row3['organization'];
        
        if($lev2=="university")
        {
        $query="Select count(*) as cnt from grievuniv where univ_id='$id'";
        $cnt=mysqli_query($con,$query);
        
           $row=mysqli_fetch_array($cnt);
            
            
            echo '<a href="#" class="notification">';
        echo  '  <span>Inbox</span>';
        echo    '<span class="badge">'.$row['cnt'].'</span>';
        echo '</a>';
        }
        else 
        if($lev2=="institute")
        {
        $query="Select count(*) as cnt from grievins where inst_id='$id'";
        $cnt=mysqli_query($con,$query);
        
           $row=mysqli_fetch_array($cnt);
            
            
            echo '<a href="#" class="notification">';
        echo  '  <span>Inbox</span>';
        echo    '<span class="badge">'.$row['cnt'].'</span>';
        echo '</a>';
        }
        else 
        if($lev2=="department")
        {
        $query="Select count(*) as cnt from grievdept where dept_id='$id'";
        $cnt=mysqli_query($con,$query);
        
           $row=mysqli_fetch_array($cnt);
            
            
            echo '<a href="#" class="notification">';
        echo  '  <span>Inbox</span>';
        echo    '<span class="badge">'.$row['cnt'].'</span>';
        echo '</a>';
        }
?><nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: url(&quot;assets/img/cropped-header.png&quot;);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Grievances List</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
        <table id="t1"  style="width:100%">
            <tr>
                <th>Comp_id</th>
                <th>Category</th>
                <th>Resolve</th>
            </tr>
<?php

            
                    if(isset($_POST['enter2']))
        {
            $cat=$_POST['cat'];
            
            if($cat=="exam")
            {
            $stdid=$_SESSION['aduser'];
    $lev2=$_SESSION['l2'];
            
            
            $query="select organization from admininfo where username='$stdid'";
              $query_run5= mysqli_query($con,$query);
            
            
            $row5=mysqli_fetch_array($query_run5);
                $org=$row5['organization'];
            
        if($lev2=="institute")
        {
  $query="SELECT * FROM grievins where inst_id='$org' and category='$cat'";
            
            
              $query_run2= mysqli_query($con,$query);
                
        while($row1=mysqli_fetch_array($query_run2)){
                
           $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=institute'>View</a></td>";
  echo '</tr>';
            
            }
        }
                else if($lev2=="university")
                { $query="SELECT * FROM grievuniv where univ_id='$org' and category='$cat'";
            
            
              $query_run1= mysqli_query($con,$query);
        while($row1=mysqli_fetch_array($query_run1)){
                    
                  $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=university'>View</a></td>";
  echo '</tr>';
              
        }
                
                }
                else if($lev2=="department")
                {
            $query="SELECT * FROM grievdept where dept_id='$org'  and category='$cat'";
            
            
              $query_run3= mysqli_query($con,$query);
    while($row1=mysqli_fetch_array($query_run3)){
    
                    $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=department'>View</a></td>";
  echo '</tr>';
        
       
                }
                }
       
            }
            else if($cat=="finance")
            {
            $stdid=$_SESSION['aduser'];
    $lev2=$_SESSION['l2'];
            
            
            $query="select organization from admininfo where username='$stdid'";
              $query_run5= mysqli_query($con,$query);
            
            
            $row5=mysqli_fetch_array($query_run5);
                $org=$row5['organization'];
            
        if($lev2=="institute")
        {
  $query="SELECT * FROM grievins where inst_id='$org' and category='$cat'";
            
            
              $query_run2= mysqli_query($con,$query);
                
        while($row1=mysqli_fetch_array($query_run2)){
                
           $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=institute'>View</a></td>";
  echo '</tr>';
            
            }
        }
                else if($lev2=="university")
                { $query="SELECT * FROM grievuniv where univ_id='$org' and category='$cat'";
            
            
              $query_run1= mysqli_query($con,$query);
        while($row1=mysqli_fetch_array($query_run1)){
                    
                  $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=university'>View</a></td>";
  echo '</tr>';
              
        }
                
                }
                else if($lev2=="department")
                {
            $query="SELECT * FROM grievdept where dept_id='$org'  and category='$cat'";
            
            
              $query_run3= mysqli_query($con,$query);
    while($row1=mysqli_fetch_array($query_run3)){
    
                    $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=department'>View</a></td>";
  echo '</tr>';
        
       
                }
                }
       
            }
            
            else
            if($cat=="admission")
            {
            $stdid=$_SESSION['aduser'];
    $lev2=$_SESSION['l2'];
            
            
            $query="select organization from admininfo where username='$stdid'";
              $query_run5= mysqli_query($con,$query);
            
            
            $row5=mysqli_fetch_array($query_run5);
                $org=$row5['organization'];
            
        if($lev2=="institute")
        {
  $query="SELECT * FROM grievins where inst_id='$org' and category='$cat'";
            
            
              $query_run2= mysqli_query($con,$query);
                
        while($row1=mysqli_fetch_array($query_run2)){
                
           $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=institute'>View</a></td>";
  echo '</tr>';
            
            }
        }
                else if($lev2=="university")
                { $query="SELECT * FROM grievuniv where univ_id='$org' and category='$cat'";
            
            
              $query_run1= mysqli_query($con,$query);
        while($row1=mysqli_fetch_array($query_run1)){
                    
                  $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=university'>View</a></td>";
  echo '</tr>';
              
        }
                
                }
                else if($lev2=="department")
                {
            $query="SELECT * FROM grievdept where dept_id='$org'  and category='$cat'";
            
            
              $query_run3= mysqli_query($con,$query);
    while($row1=mysqli_fetch_array($query_run3)){
    
                    $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=department'>View</a></td>";
  echo '</tr>';
        
       
                }
                }
       
            }
            else if($cat=="timetable")
            {
            $stdid=$_SESSION['aduser'];
    $lev2=$_SESSION['l2'];
            
            
            $query="select organization from admininfo where username='$stdid'";
              $query_run5= mysqli_query($con,$query);
            
            
            $row5=mysqli_fetch_array($query_run5);
                $org=$row5['organization'];
            
        if($lev2=="institute")
        {
  $query="SELECT * FROM grievins where inst_id='$org' and category='$cat'";
            
            
              $query_run2= mysqli_query($con,$query);
                
        while($row1=mysqli_fetch_array($query_run2)){
                
           $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=institute'>View</a></td>";
  echo '</tr>';
            
            }
        }
                else if($lev2=="university")
                { $query="SELECT * FROM grievuniv where univ_id='$org' and category='$cat'";
            
            
              $query_run1= mysqli_query($con,$query);
        while($row1=mysqli_fetch_array($query_run1)){
                    
                  $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=university'>View</a></td>";
  echo '</tr>';
              
        }
                
                }
                else if($lev2=="department")
                {
            $query="SELECT * FROM grievdept where dept_id='$org'  and category='$cat'";
            
            
              $query_run3= mysqli_query($con,$query);
    while($row1=mysqli_fetch_array($query_run3)){
    
                    $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=department'>View</a></td>";
  echo '</tr>';
        
       
                }
                }
       
            }
            
            
        }
         else{   
            $stdid=$_SESSION['aduser'];
    $lev2=$_SESSION['l2'];
            
            
            $query="select organization from admininfo where username='$stdid'";
              $query_run5= mysqli_query($con,$query);
            
            
            $row5=mysqli_fetch_array($query_run5);
                $org=$row5['organization'];
            
        if($lev2=="institute")
        {
  $query="SELECT * FROM grievins where inst_id='$org'";
            
            
              $query_run2= mysqli_query($con,$query);
                
        while($row1=mysqli_fetch_array($query_run2)){
                
           $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=institute'>View</a></td>";
  echo '</tr>';
            
            }
        }
                else if($lev2=="university")
                { $query="SELECT * FROM grievuniv where univ_id='$org'";
            
            
              $query_run1= mysqli_query($con,$query);
        while($row1=mysqli_fetch_array($query_run1)){
                    
                  $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=university'>View</a></td>";
  echo '</tr>';
              
        }
                
                }
                else if($lev2=="department")
                {
            $query="SELECT * FROM grievdept where dept_id='$org'";
            
            
              $query_run3= mysqli_query($con,$query);
    while($row1=mysqli_fetch_array($query_run3)){
    
                    $yz=$row1['comp_id'];
                 
echo '<tr>';
                 echo '<td>' . $row1['comp_id']      . '</td>';
               echo '<td>' . $row1['category'] . '</td>';
                    echo        "<td> <a href='track.php?cmp=$yz&lev=department'>View</a></td>";
  echo '</tr>';
        
       
                }
                }}
?></table>
  
    
    </div>
    
    
        <p><b> sort by category:</b></p>
        <input list="host" name="cat" value="<?php echo isset($_POST['cat']) ? $_POST['cat'] : '' ?>" class="form-control">
         <datalist id="host">
                <option value="finance">
                <option value="admission">
                <option value="timetable">
                 <option value="exam">
                
                </datalist>
       <div class="form-group"><button name="enter2" class="btn btn-primary" type="">enter </button></div>

    </form>
    
    </body>

</html>