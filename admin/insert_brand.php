<?php if(!isset($_SESSION['admin_email'])) {
	
	echo "<script>window.open('login.php','_self')</script>";
	
} 
   else {
	   
	   ?>

<html>
 <head>
 <style type="text/css">
 
 form{
	 margin:15%;
 }
 </style>
 </head>
 <body>
    <form action="" method="post">
	   
	   <b>Insert New Brand</b>
	   <input type="text" name="brand_title" placeholder="Insert Brand" style="width: 60%; padding: 12px 20px; margin: 8px 0;
		display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;" /><br>
	   
	  <center> <input type="submit" name="insert_brand" value="Insert Brand"
	   style="width: 30%; padding: 12px 20px; margin: 8px 0;
	display: inline-block; background-color: #4CAF50; color:white; float:right 50px; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/>
	
	</center>
	
	</form>
 
 <?php

   include("includes/db.php");
  if(isset($_POST['insert_brand']))
  {
	  
	  $brand_title=$_POST['brand_title'];
	  
	  $insert_brand="insert into brands (brand_title) values('$brand_title')";
	  
	  $run_brand=mysqli_query($con,$insert_brand);
	  
	  if($run_brand)
	  {
		  
		  
		  
			   echo "<script>alert('one brand has been inserted!')</script>";
			   
			   echo "<script>window.open('index.php?view_brands','_self')</script>";
	  }
	  
  }

?>

</body>
</html>

   <?php } ?>