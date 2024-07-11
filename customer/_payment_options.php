

<html>
    <head>
	     <title>payment option for you</title>
	</head>

<body>
<?php
 include("includes/db.php");
 
?>



<div align="center" style="padding:20px;">
  <h2>Payment Options For You</h2>
  <?php
     $ip=getRealIpAddr();
	 
	 $get_customer="select * from customers where customer_ip='$ip'";
	 $run_customer=mysqli_query($con,$get_customer);
	 $customer=mysqli_fetch_array($run_customer);
	 

	 $customer_id=$customer['customer_id'];
  
  
  
  ?>
  
  
  

<b>pay with</b>&nbsp; <a href="http://www.paypal.com"><img src="images/images.jpg" width="200" height="80"></a><b> or<a href="order.php?c_id= <?php echo $customer_id; ?>"> pay offline</a></b>
</br><br><br><br><b> If you "pay offline" option then please check your email or account to find the Invoice No for your order</b>
</div>








</body>
</html>
