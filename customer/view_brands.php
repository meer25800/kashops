<?php

if(!isset($_SESSION['admin_email'])) {
	
	echo "<script>window.open('login.php','_self')</script>";
	
} 
   else {
	?>   

<html>
      
    <head>
	     <title>   </title>
		 
		<style type="text/css">
		tr,th{  
		border:3px groove #000
		} 
		th{
		   color:#f90;
	   }
	   td{
		   
		   color:white;
	   }
	   h2{
		   color:#f90;
	   }
	   form{
		   margin-top:-80px;
	   }
		</style> 
		 
	</head>
<body>
<form>
      <table align="center" width="794" bgcolor="black" >
          
		  <tr align="center">
		    <td colspan="4"><h2>View All Brands!</h2>  </td>
		  </tr>
		  
		  <tr>
          <th>Brand ID</th>
		  <th>Brand Title</th>
		  <th>Delete</th>
		  <th>Edit</th>
       </tr>
	    
		<?php
		
		include("includes/db.php");
		
		
		$get_brands="select * from brands";
		
		$run_brands=mysqli_query($con,$get_brands);
		
		while($row_brands=mysqli_fetch_array($run_brands))
{
	$brand_id=$row_brands['brand_id'];
	$brand_title=$row_brands['brand_title'];
	

		
		?>
		
		
	   <tr align="center">
	       <td><?php echo $brand_id; ?></td>
		   <td><?php echo $brand_title; ?></td>
		   <td><a href="index.php?edit_brand=<?php echo $brand_id?>">Edit</a></td>
		   <td><a href="index.php?delete_brand=<?php echo $brand_id?>">Delete</a></td>
				
	   </tr>
<?php } ?>
	   </table>
	   </form>

</body>


</html>

   <?php } ?>