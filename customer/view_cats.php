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
		    <td colspan="4"><h2>View All Categories!</h2>  </td>
		  </tr>
		  
		  <tr>
          <th>Category ID</th>
		  <th>Category Title</th>
		  <th>Edit</th>
		  <th>Delete</th>
       </tr>
	    
		<?php
		
		include("includes/db.php");
		
		
		$get_cats="select * from categories";
		
		$run_cats=mysqli_query($con,$get_cats);
		
		while($row_cats=mysqli_fetch_array($run_cats))
{
	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];
	

		
		?>
		
		
	   <tr align="center">
	       <td><?php echo $cat_id; ?></td>
		   <td><?php echo $cat_title; ?></td>
		   <td><a href="index.php?edit_cat=<?php echo $cat_id?>">Edit</a></td>
		   <td><a href="index.php?delete_cat=<?php echo $cat_id?>">Delete</a></td>
				
	   </tr>
<?php } ?>
	   </table>
</form>
</body>


</html>

   <?php } ?>