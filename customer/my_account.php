
<?php
  session_start();
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
		 <a href="index1.php"><img src="../images/logo.jpg" style="float:left;"></a>
		  <a href="index1.php"><img src="../images/header1.png" style="float:right;"></a>
		  
		  
		  </div>
		  
		  <!---header ends-->
		  
		  
		     <!---navigation starts-->
			 
			 <div id="navbar">
			 
			
			 
			    <ul id="menu">
				     <li><a href="../index1.php">Home</a></li>
					 <li><a href="../all_products.php">All Products</a></li>	
					 <li><a href="my_account.php">My Account</a></li>
					 
					 
					 <li><a href="../cart.php">Shopping Cart</a></li>
					 <li><a href="../contact.php">Contact Us</a></li>
			 
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
				
				   <div id="sidebar_title">Manage Account:</div>
				   
				    <ul id="cats">
					
					<?php  
					
				
					    $customer_session=$_SESSION['customer_email'];
						
						$get_customer_pic="select * from customers where customer_email='$customer_session'";
						
						$run_customer=mysqli_query($con,$get_customer_pic);
						
				        $row_customer=mysqli_fetch_array($run_customer);
						
						$customer_pic=$row_customer['customer_image'];
						
						echo "<img src='customer_photos/$customer_pic' width='180' height='180'>";
				 
					?>
					    <li><a href="my_account.php?my_orders">My Orders</a></li>
						<li><a href="my_account.php?edit_account">Edit Account</a></li>
						<li><a href="my_account.php?change_pass">Change Password </a></li>
						<li><a href="my_account.php?delete_account">Delete Account</a></li>
						<li><a href="logout.php">Logout</a></li>
					
					
				      </ul>
				</div>
				
				
				
				<div id="right_content">
				<?php
				cart();
				
				?>
				
				 <div id="headline" >
				 
				 
				 <div id ="headline_content" >
				 <?php  
				 
				 if(isset($_SESSION['customer_email']))
				 {
					 
					 echo "<b>Welcome:"."</b>" . "<b style='color:yellow;'>".$_SESSION['customer_email'] ."</b>";
				 }
				 
				 ?>
				 
				 
				 <?php
					 if(!isset($_SESSION['customer_email']))
					 {
						 echo "<a href='../checkout.php' style='color:#006099;'>Login</a>";
					 }
					 else{
				  
				echo  "&nbsp;<a href='logout.php' style='color:#006099;'>Logout</a>";
					 }
				 
				 
				 
				 ?>
				 </span>
				 
				 </div>
				 
</div>
             
				
				<div>
				
				   <h2 style=" padding:50px; color:#f90; text-align:center; border-top:2px solid #fff;"> Manage Your Account Here</h2>
  
  
             	<?php 
				getDefault();
				?> 
				
				<?php 
				if(isset($_GET['my_orders']))
				{
					
					
				include("my_orders.php");	
						
				} 
				if(isset($_GET['edit_account']))
				{
					
					
				include("edit_account.php");	
						
				} 
				if(isset($_GET['change_pass']))
				{
					
					
				include("change_pass.php");	
						
				} 
				
				if(isset($_GET['delete_account']))
				{
					
					
				include("delete_account.php");	
						
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