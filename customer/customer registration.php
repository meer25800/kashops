
<?php
session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<html>
   <head>
   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
        <title>My Shop</title>
	
	 
    <style type="text/css">
	
	#left_sidebar
	
	{
		height:800px;
	}
	
	b{
		
		color:white;
	}
	h2{
		color:white;
	}
	</style>
    
   
   
   

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
				
				 <div id="headline">
				 
				 
				 <div id ="headline_content">
				 <b>Welcome Guest!</b>
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
             
				
				<div >
				<form action="customer_register.php" method="post" enctype="multipart/form-data"/>
				
				 <table width="750" align="center" height="432">
				  
				  <tr align="center">
				     <td colspan="5"><h2>Create an Account</h2></td>
					 
				  </tr>	
				  
				  <tr>
				     <td align="right"><b>Customer Name:</b></td>
					 <td><input type="text" name="c_name"  placeholder="Name" style="width: 60%; padding: 12px 20px; margin: 8px 0 
					 display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;" ;required /></td>
					 
					 
				  </tr>	
				  
				   <tr>
				     <td align="right"><b>Customer Email:</b></td>
					 <td><input type="text" name="c_email"  placeholder="Email" style="width: 60%; padding: 12px 20px; margin: 8px 0; 
					 display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;" required /></td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer Password:</b></td>
					 <td><input type="password" name="c_pass" placeholder="Password" style="width: 60%; padding: 12px 20px; margin: 8px 0; 
					 display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"required /></td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer Country:</b></td>
					 <td>
					 
					 <select name="c_country" style="width: 60%; padding: 12px 20px; margin: 8px 0 isplay: inline-block;  border: 1px solid #ccc;
					 border-radius: 4px;  box-sizing: border-box;"; >
					     <option> Select a Country</option>
						 <option> India           </option>
						 <option> Afghanistan     </option>
						 <option> Pakistan        </option>
						 <option> China           </option>
						 <option> Bangladesh      </option>
						 <option> Japan           </option>
						 <option> Sudia Arabia    </option>
						 <option> USA             </option>
						 <option> England         </option>
						 <option> Srilanka        </option>
						 <option> Germany         </option>
						 <option> Canada          </option>
					 
					 </select>
					 </td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer City:</b></td>
					 <td><input type="text" name="c_city" placeholder="Your City" style="width: 60%; padding: 12px 20px; margin: 8px 0;
					display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;" 
					required /></td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer Mobile No:</b></td>
					 <td><input type="text" name="c_contact" placeholder="Mobile No"style="width: 60%; padding: 12px 20px; margin: 8px 0;
					display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;" 
					required /></td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer Address:</b></td>
					 <td><input type="text" name="c_address" placeholder="Address" style="width: 60%; padding: 12px 20px; margin: 8px 0;
					display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"
					required /></td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer Image:</b></td>
					 <td><input type="file" name="c_image" style="width: 60%; padding: 12px 20px; margin: 8px 0;
					 display: inline-block;   border-radius: 4px;  box-sizing: border-box;"
					 required /></td>
					 
					 
				  </tr>
				  
				  <tr align="center">
				     
					 <td colspan="5"><input type="submit" name="register"  value="Submit"  style="width: 30%; padding: 12px 20px; margin: 8px 0;
					 display: inline-block; background-color: #4CAF50; color:white; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/></td>
					 
					 
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
 <?php
   if(isset($_POST['register']))
   {
	  
	   $c_name=$_POST['c_name'];
	   $c_email=$_POST['c_email'];
	   $c_pass=$_POST['c_pass'];
	   $c_country=$_POST['c_country'];
	   $c_city=$_POST['c_city'];
	   $c_contact=$_POST['c_contact'];
	   $c_address=$_POST['c_address'];
	   $c_image=$_FILES['c_image']['name'];
	   $c_image_tmp=$_FILES['c_image']['tmp_name'];
       $c_ip=getRealIpAddr();
	   
	   $insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) 
	   values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
        
		$run_customer=mysqli_query($con,$insert_customer);
		
     move_uploaded_file($c_image_tmp,"customers/customer_photos/$c_image");
	 
	 
	 $sel_cart="select * from cart where ip_add='$c_ip'";
         $run_cart=mysqli_query($con,$sel_cart);
         $check_cart=mysqli_num_rows($run_cart);
   
     if($check_cart>0)
	 {
		 $_SESSION['customer_email']=$c_email;
		 echo "<script>alert('Account created successfully,thank you!')</script>";
		 echo "<script>window.open('checkout.php','_self')</script>";
	 }
     else{
		 
		  $_SESSION['customer_email']=$c_email;
		 echo "<script>alert('Account created successfully,thank you!')</script>";
		  echo "<script>window.open('index1.php','_self')</script>";
		 
		 
	 }
   }
 ?>