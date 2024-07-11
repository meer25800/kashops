
<?php
  session_start();
include("includes/db.php");
include("functions/functions.php");

?>

<html>
   <head>
   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
        <title>My Shop</title>
	<link rel="stylesheet" href="style/bootstrap.min.cs" >
	<link rel="stylesheet" href="style/style1.css" media="all">	
	<head>
     <body bgcolor="#c5c1aa" >
	      
		  
		  <!--main container starts-->
		  
		  
		  
		  <div class="main_wrapper">
		 


		 <!--header starts-->
		  <div class="header_wrapper">
		 <a href="index1.php"><img src="images/logo.jpg" style="float:left;"></a>
		  <a href="index1.php"><img src="images/header1.png" style="float:right;"></a>
		  
		  
		  </div>
		  
		  <!---header ends-->
		  
		  
		     <!---navigation starts-->
			 
			 <div id="navbar">
			 
			
			 
			    <ul id="menu">
				     <li><a href="index1.php">Home</a></li>
					 <li><a href="all_products.php">All Products</a></li>	
					 <li><a href="customers/my_account.php">My Account</a></li>
					 <li><a href="customer_register.php">Sign Up</a></li>
					 <li><a href="cart.php">Shopping Cart</a></li>
					 <li><a href="contact.php">Contact Us</a></li>
			 
					</ul>
					
					
					
					 <div id="form">
					
					    <form method="get" action="results.php" enctype="multipart/form-data">
					
					<input type="text" name="user_query" placeholder="Search a product"/>
			        <input type="submit" name="search" value="Search"/>
					
					
				</form>
					
			</div>
					
					
			
			 </div>
			 
			  <!---navigation ends-->
			  
			  
			   <!---contents starts-->
			 <div class="content_wrapper">
			 
				<div id="left_sidebar">
				
				   <div id="sidebar_title">Categories</div>
				   
				    <ul id="cats">
					
					<?php 
					getCats();
					 
					   ?>
				  </ul>
				  
				  <div id="sidebar_title">Brands</div>
				  
				     <ul id="cats">
					 <?php 
					 getBrands();
					
					   ?>
				      </ul>
				</div>
				
				
				
				<div id="right_content">
				<?php
				cart();
				
				?>
				
				 <div id="headline" >
				 
				 
				 <div id ="headline_content" >
				 <?php
				 
				     if(!isset($_SESSION['customer_email']))
						 
						 {
							 echo "<b>Welcome Guest<b>";
							 
							 
						 }
						 
						 else 
						 {
							 echo "<b>welcome :" . "<span style='color:skyblue'>"  . $_SESSION['customer_email'] ."</span>"."</b>";
							 
						 }
				 
				 
				 
				 ?>
				 
				 
				 
				 
				 
				 <b style="color:yellow;">Shopping Cart:</b>
				 
				 <span>- Total Items:<?php items();?> - Total Price:<?php  total_price();?>-  <a href="cart.php" style="color:ff0;">Go to Cart</a>
 <?php
				     
					 if(!isset($_SESSION['customer_email']))
					 {
						 echo "<a href='checkout.php' style='color:#006099;'>Login</a>";
					 }
					 else{
				  
				echo  "&nbsp;<a href='logout.php' style='color:#006099;'>Logout</a>";
					 }
				 
				 
				 
				 ?>
				 </span>
				 
				 </div>
				 
</div>
             
				
				<div id="products_box">
				<?php
				getPro();
				getCatPro();
				 getBrandPro();
				
				?>
				
				
				</div>
				</div>
				
			 </div>
			 
			 
			 <!---footer starts-->
			 
			 
			 
			 <div class="footer"> <div class="col-md>"<h1 style="color:#000; padding-top:30px;
			  text-align:center; font-size:20px">
			  
			   Copyright &copy 2018 </h1>
			  
			  </div>
			 </div>
			 
			  <!---footer ends-->
			 
			 
			</div> 
	 
	       <!---main container ends-->
		   </div>
	 
	 
	 
	 </body>
 
		         

 </html>