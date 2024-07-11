<?php
session_start();
include("includes/db.php");

?>

<html>
   <head>
   

   <link rel="stylesheet" href="login.css" media="all"/>
   
   </head>
   
<body bgcolor="rgba(47, 78, 183, 0.58)">
   
  
    <div class="login-card">
	  <h1 font="30">Admin Login</h1>
	  <form method="post">
	  
	    <input type="text" name="admin_email" placeholder="Email" required/>
		
		<input type="password" name="admin_pass" placeholder="Password" required/>
	    
		<input type="submit" name="login" value="Admin Login"/>
	
	</form>
	</div>
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>


<h2 style="color:red; text-align:center; padding:20px;">
<?php echo @$_GET['logout'];?></h2>
</body>

</html>
<?php
   if(isset($_POST['login'])){
	   
	   $user_email=$_POST['admin_email'];
	   $user_pass=$_POST['admin_pass'];
	   
	   $sel_admmin="select * from admins where admin_email='$user_email' AND admin_pass='$user_pass'";
	   
	   $run_admin=mysqli_query($con,$sel_admmin);
	   
	   $check_admin=mysqli_num_rows($run_admin);
	   
	   if($check_admin==1)
	   {
		   $_SESSION['admin_email']=$user_email;
		   
		   echo "<script>window.open('index.php?logged_in=you successfully logged in','_self')</script>";
		   
	   }
	   else {
		   
		   echo "<script>alert('Email or Password is incorrect !!, Try Again')</script>";
	   }
   }


?>