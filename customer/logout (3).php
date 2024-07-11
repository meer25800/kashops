<?php 
session_start();

session_destroy();

echo "<script>window.open('login.php?logout=you successfully loged out!','_self')</script>";

 ?>