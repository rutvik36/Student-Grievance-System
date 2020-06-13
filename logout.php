<?php
session_start();

echo $_SESSION['username'];
if(isset($_SESSION['username']))
{session_destroy();
	header('location:index.php');}
	
?>
