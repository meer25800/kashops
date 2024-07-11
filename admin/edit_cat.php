<?php if(!isset($_SESSION['admin_email'])) {
	
	echo "<script>window.open('login.php','_self')</script>";
	
} 
   else {
	   
	   ?>


<?php 
  include("includes/db.php");

if(isset($_GET['edit_cat']))
{
	
	
	$cat_id=$_GET['edit_cat'];
	$edit_cat="select * from categories where cat_id='$cat_id'";
	
	$run_edit=mysqli_query($con,$edit_cat);
	
	$row_edit=mysqli_fetch_array($run_edit);
	
	$cat_edit_id=$row_edit['cat_id'];
	
	$cat_title=$row_edit['cat_title'];
	
	
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
   
   
   <b align="center">Edit This Category</b>
    <input type="text" name="cat_title1"
style="width: 60%; padding: 12px 20px; margin: 8px 0;
					 display: inline-block;   border-radius: 4px;  box-sizing: border-box;"	value="<?php echo $cat_title; ?>"/>
					 
			<center>			
    <input type="submit" name="update_cat" value="Update Category"
	
	style="width: 30%; padding: 12px 20px; margin: 8px 0;
					 display: inline-block; background-color: #4CAF50; color:white; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/>
   
   </center>
   </form>
 </body>
   

</html>

<?php  
  if(isset($_POST['update_cat']))
  {
	  $cat_title123=$_POST['cat_title1']; 
	  
	  $update_cat="update categories set cat_title='$cat_title123' where cat_id='$cat_edit_id'";
	  
	  $run_update=mysqli_query($con,$update_cat);

	  if($update_cat)
	  
	  {
		  echo "<script>alert('Category has been updated!')</script>";
		  
		  echo "<script>window.open('index.php?view_cats','_self')</script>";
		  }
	  
	  }

?>

   <?php }?>