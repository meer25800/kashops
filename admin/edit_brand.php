<?php if(!isset($_SESSION['admin_email'])) {
	
	echo "<script>window.open('login.php','_self')</script>";
	
} 
   else {
	   
	   ?>

<?php 
  include("includes/db.php");

if(isset($_GET['edit_brand']))
{
	$brand_id=$_GET['edit_brand'];
	$edit_brand="select * from brands where brand_id='$brand_id'";
	
	$run_edit=mysqli_query($con,$edit_brand);
	
	$row_edit=mysqli_fetch_array($run_edit);
	
	$brand_edit_id=$row_edit['brand_id'];
	
	$brand_title=$row_edit['brand_title'];
	
	
}



?>

<html>

   <head>
      <style type="text/css">
	  
	  b{
		  color:#f90;
		  font-size:20px;
	  }
	  </style>
   </head>
   
<body>
   <form action="" method="post">
   
   
   <b>Edit This Brand</b>
    <input type="text" name="brand_title1" 
	 style="width: 60%; padding: 12px 20px; margin: 8px 0;
	display: inline-block;   border-radius: 4px;  box-sizing: border-box;" value="<?php echo $brand_title; ?>"/>
	
	<center>
    <input type="submit" name="update_brand" value="Update Brands"
	  style="width: 30%; padding: 12px 20px; margin: 8px 0;
 display: inline-block; background-color: #4CAF50; color:white; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/>
	
	</center>
   </form>
 </body>
   

</html>

<?php  
  if(isset($_POST['update_brand']))
  {
	  $brand_title123=$_POST['brand_title1']; 
	  
	  $update_brand="update brands set brand_title='$brand_title123' where brand_id='$brand_edit_id'";
	  
	  $run_update=mysqli_query($con,$update_brand);

	  if($update_brand)
	  
	  {
		  echo "<script>alert('brand has been updated!')</script>";
		  
		  echo "<script>window.open('index.php?view_brands','_self')</script>";
		  }
	  
	  }

?>

   <?php } ?>