
<?php
  session_start();
include("includes/db.php");
include("functions/functions.php");
 
     if(isset($_POST['submit'])) {
		 
		 $uname=$_POST['uname'];
		 $uemail=$_POST['uemail'];
		 $comment=$_POST['comment'];
		 
		 
		
		$insert="insert into contact_us (uname,uemail,comment) values('$uname','$uemail','$comment')" ;
		
		$run=mysqli_query($con,$insert);
		
		if($run)
			
			{
				
				
		echo "<script>alert('Your feedback has been submitted!')</script>";
        echo "<script>window.open('contact.php','_self')</script>";		
		
			}
		 
	 }
 
 
 ?>

<html>
   <head>
   <style type="text/css">
    #right_content{
		height:714px;
		
	}
	tr,td{
		color:#f93;
		font-size:22px;
		
	}
   </style>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
        <title>My Shop</title>
	
	<link rel="stylesheet" href="style/style1.css" media="all">	
	<head>
     <body bgcolor="#c5c1aa">
	      
		  
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
				
				
				<form action="contact.php" method="post">
					<table border="0px">
					  
					   <tr align="center">
					   <td colspan="3" ><h2 >Contact Form</h2></td>
					   </tr><br><br>
					   <tr>
					     <td>
						    <label>Name </label>
						 </td>
						 <td><input type="text" name="uname" placeholder="your name please !!" 
						  style="width: 60%; padding: 12px 20px; margin: 8px 0;
	display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"
						 required></td>
					   </tr>
					   
					   <tr>
					     <td>
						    <label>Email  </label>
						 </td>
						 <td><input type="email" name="uemail" placeholder="your Email please !!"
						  style="width: 60%; padding: 12px 20px; margin: 8px 0;
	                    display: inline-block;  border: 1px solid #ccc; border-radius: 4px; 
						box-sizing: border-box;"
						 required  ></td>
					   </tr>
					   
					   <tr>
					     <td>comment</td>
						 <td>
						    <textarea name="comment" rows="20"  cols="50" placeholder="write something here !!"></textarea>
						 </td>
					   </tr>
					   <tr align="right" >
					     
						 <td colspan="3"><input color="orange" type="submit" name="submit" 
						 style="width: 30%; padding: 12px 20px; margin: 8px 0;
	                    display: inline-block; background-color: #4CAF50; color:white;
						border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"
						 /></td>
					   </tr>
					
					</table>

				</form>					
				

				</div>
				</div>
				
			 </div>
			 
			 
			 <!---footer starts-->
			 
			 
			 
			 <div class="footer"> <h1 style="color:#000; padding-top:30px;
			  text-align:center; font-size:20px">
			  
			   Copyright &copy 2017 - By www.gigatechnologie.com/aamir</h1>
			  
			  </div>
			 
			 
			  <!---footer ends-->
			 
			 
			</div> 
	 
	       <!---main container ends-->
		   </div>
	 
	 
	 
	 </body>
 
		         

 </html>
 
 
 
