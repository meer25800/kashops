
<?php

include("includes/db.php");
include("functions/functions.php");

?>

<html>
   <head>
   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
        <title>My Shop</title>
	
	<link rel="stylesheet" href="style/style1.css" media="all">	
	<head>
     <body bgcolor="#c5c1aa">
	      
		  
		  <!--main container starts-->
		  
		  
		  
		  <div class="main_wrapper">
		 


		 <!--header starts-->
		  <div class="header_wrapper">
		 <a href="index1.php"> <img src="images/logo.jpg" style="float:left;"></a>
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
				
				
				 <div id="headline">
				 
				 
				 <div id ="headline_content">
				 <b>Welcome Guest!</b>
				 <b style="color:yellow;">Shopping Cart:</b>
				 
				 <span>- Items - Price: </span>
				 
				 </div>
				 
</div>
				
				<div id="products_box">
				<?php
				
				if(isset($_GET['pro_id']))
					
				{
				  $product_id=$_GET['pro_id'];	
					
	           $get_products ="select * from products where product_id='$product_id'";
				
				$run_products =mysqli_query($con, $get_products);
				
				while($row_products=mysqli_fetch_array($run_products)) {
				
				
				$pro_id =$row_products['product_id'];
				$pro_title =$row_products['product_title'];
				
				$pro_desc =$row_products['product_desc'];
				$pro_price =$row_products['product_price'];
				$pro_image1 =$row_products['product_img1'];
				$pro_image2 =$row_products['product_img2'];
				$pro_image3 =$row_products['product_img3'];
				
				
				echo "
				<div id='single_product'>
				<h3>$pro_title</h3>
				<img src ='admin_area/product_images/$pro_image1' width='180' height='180'/>
				<img src ='admin_area/product_images/$pro_image2' width='250' height='250'/>
				<img src ='admin_area/product_images/$pro_image3' width='250' height='250'/><br>
				<p><b>price: Rs $pro_price</b></p>
				<p>$pro_desc</p>
				<a href ='index1.php' style='float:left;color:red;'>Go Back</a>
				<a href ='index1.php?add_cart=$pro_id'><button style ='float:right; color:red;margin-right:15px;'>Add to Cart</button>
				</a>
				</div>";
				}
				
				}
				?>
				
				
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