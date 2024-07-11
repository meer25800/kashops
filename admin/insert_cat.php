<html>
 <head>
 <style type="text/css">
 
 form{
	 margin:15%;
 }
 b{
	 color:#f90;
	 font-size:20px;
 }
 </style>
 </head>
 <body>
    <form action="" method="post" >
	   
	   <b>Insert New Category</b>
	   <input type="text" name="cat_title" placeholder="Insert Category"
     style="width: 60%; padding: 12px 20px; margin: 8px 0;
	display: inline-block;  border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;" 	   />
	   
	  <center> <input type="submit" name="insert_cat" value="Insert Category"
	   style="width: 30%; padding: 12px 20px; margin: 8px 0;
	 display: inline-block; background-color: #4CAF50; color:white; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/>
	
	</center>
	
	</form>
 
 <?php

   include("includes/db.php");
  if(isset($_POST['insert_cat']))
  {
	  
	  $cat_title=$_POST['cat_title'];
	  
	  $insert_cat="insert into categories (cat_title) values('$cat_title')";
	  
	  $run_cat=mysqli_query($con,$insert_cat);
	  
	  if($run_cat)
	  {
		  
		  
		  
			   echo "<script>alert('one category has been inserted!')</script>";
			   
			   echo "<script>window.open('index.php?view_cats','_self')</script>";
	  }
	  
  }

?>

</body>
</html>

