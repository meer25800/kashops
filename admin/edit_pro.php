<?php if(!isset($_SESSION['admin_email'])) {
	
	echo "<script>window.open('login.php','_self')</script>";
	
} 
   else {
	   
	   ?>


<!-- getting products from table -->

<?php  
include("includes/db.php");

if(isset($_GET['edit_pro']))
{
	
	$edit_id=$_GET['edit_pro'];

 $get_edit="select * from products where product_id='$edit_id'";
 
 $run_edit=mysqli_query($con,$get_edit);
 
 $row_edit=mysqli_fetch_array($run_edit);
 
 $update_id=$row_edit['product_id'];
 
 $p_title=$row_edit['product_title'];
 
 $cat_id=$row_edit['cat_id'];
 
 $brand_id=$row_edit['brand_id'];
 
 $p_image1=$row_edit['product_img1'];
 
 $p_image2=$row_edit['product_img2'];
 
 $p_image3=$row_edit['product_img3'];
 
 $p_price=$row_edit['product_price'];
 
 $p_desc=$row_edit['product_desc'];
 
 $p_keywords=$row_edit['product_keywords'];
}

 // getting category products
 $get_cat="select * from categories where cat_id='$cat_id'";
 $run_cat=mysqli_query($con,$get_cat);
 
 $cat_row=mysqli_fetch_array($run_cat);
 
 $cat_edit__title=$cat_row['cat_title'];
 
 // getting brand products
 $get_brand="select * from brands where brand_id='$brand_id'";
 $run_brand=mysqli_query($con,$get_brand);
 
 $brand_row=mysqli_fetch_array($run_brand);
 
 $brand_edit__title=$brand_row['brand_title'];
 

?>



  
 <html>

   <head>
     <title> untitled</title>
	 <style type="text/css">
	 b{
		 
		 color:#f90;
	 }
	 h1{
		 color:#f90;
   } form{
	   margin-top:-80px;
   }
	 </style>
      
    </head>
	
	<body bgcolor="grey">
	  
	  
	  <form method="post" action="" enctype="multipart/form-data">
	  
	  
			<table width="794" align="center"  bgcolor="#1076a6">
			
			<tr align="center">
			
			<td colspan="2"><h1>Update or Edit Product:</h1></td>
			
			</tr>
			
			<tr>
			   <td align="right"><b>Product Title</b></td>
			    <td><input type="text" name="product_title" size="50" value="<?php echo $p_title;?>"/></td>
		    </tr>
			
			<tr>
			    <td align="right"><b>Product Category</b></td>
				<td>
				<select name="product_cat">
				  
				  <option value="<?php echo $cat_id;?>"><?php echo $cat_edit__title; ?></option>
				    
					<?php 
					
					$get_cats = "select * from categories";
					
					$run_cats = mysqli_query($con,$get_cats);
					
					
					while ($row_cats=mysqli_fetch_array($run_cats))   {
					
					$cat_id =$row_cats['cat_id'];
					
					$cat_title = $row_cats['cat_title'];
					
					echo "<option value='$cat_id'>$cat_title</option>";
					    
					   
					   }
					   ?>
				  
				  </select>
				  
				  
				  
				  
			  </td>
			 </tr>
			  <tr>
			    <td align="right"><b>Product Brand</b></td>
			    <td>
				
				<select name="product_brand">
				<option value="<?php echo $brand_id; ?>"><?php echo $brand_edit__title; ?></option>
				
				
                  <?php
					
					$get_brands = "select * from brands";
					
					$run_brands = mysqli_query($con,$get_brands);
					
					
					while ($row_brands=mysqli_fetch_array($run_brands)) 
						{
					
					$brand_id =$row_brands['brand_id'];
					
					$brand_title = $row_brands['brand_title'];
					
					echo "<option value='$brand_id'>$brand_title</option>";
					    
					   
					   }
					   ?>


				 
				</select>
				</td>
		    </tr>
			
			
			<tr>
			  <td align="right"><b>Product Image 1</b></td>
			    <td><input type="file" name="product_img1"/><br><img src="product_images/<?php echo $p_image1;?>" width="80" height="80"></td>
		    </tr>
			
			
			<tr>
			  <td align="right"><b>Product Image 2</b></td>
			    <td><input type="file" name="product_img2"/><br><img src="product_images/<?php echo $p_image2;?>" width="80" height="80"></td>
		    </tr>
			
			
			<tr>
			  <td align="right"><b>Product Image 3</b></td>
			    <td><input type="file" name="product_img3"/><br><img src="product_images/<?php echo $p_image3;?>" width="80" height="80"></td>
		    </tr>
			
			
			<tr>
			    <td align="right"><b>Product Price</b></td>
			    <td><input type="text" name="product_price" value="<?php echo $p_price;?>"/></td>
		    </tr>
			
			
			<tr>
			   <td align="right"><b>Product Description</b></td>
			    <td><textarea name="product_desc" cols="35" rows="10" ><?php echo $p_desc;?></textarea></td>
		    </tr>
			
			<tr>
			   <td align="right"><b>Product Keywords</b></td>
			   
			    <td><input type="text" name="product_keywords" size="50" value="<?php echo $p_keywords;?>"/></td>
		    </tr>
			
			<tr align ="center">
			    <td colspan="2"><input type="submit" name="update_product" value="update product"
				style="width: 30%; padding: 12px 20px; margin: 8px 0;
					 display: inline-block; background-color: #4CAF50; color:white; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/></td>
		    </tr>
			
			</form>
			</body>
</html>
 
 
        <?php 
		
		
		
		
		if(isset($_POST['update_product'])){
          
		    //text variables
			
           $product_title = $_POST['product_title'];
           $product_cat = $_POST['product_cat']; 
		   $product_brand = $_POST['product_brand'];
		   $product_price = $_POST['product_price'];
		   $product_desc = $_POST['product_desc'];
		   $status = 'on';
           $product_keywords = $_POST['product_keywords'];


             //image names


              $product_image1 = $_FILES['product_img1']['name'];
              $product_image2 = $_FILES['product_img2']['name'];
               $product_image3= $_FILES['product_img3']['name'];


                 //temp names
				 
				 $temp_name1 = $_FILES['product_img1']['tmp_name'];
                 $temp_name2 = $_FILES['product_img2']['tmp_name'];
				 $temp_name3 = $_FILES['product_img3']['tmp_name'];
				 
				 
				 if($product_title =='' OR $product_cat =='' OR $product_brand =='' OR $product_price =='' OR $product_desc =='' OR $product_keywords =='' OR $product_image1 =='') {
					 
					 
					echo "<script>alert('Please fill all fields!')</script>";
					exit();
					 
				 }
				 
				 else {
					  // uploading images in its foldder 
					  
					move_uploaded_file($temp_name1,"product_images/$product_image1");
					move_uploaded_file($temp_name2,"product_images/$product_image2");
					move_uploaded_file($temp_name3,"product_images/$product_image3");
					 
				 
$update_product = "update  products set cat_id='$product_cat',brand_id='$product_brand',date=NOW(),product_title='$product_title',product_img1='$product_image1',product_img2='$product_image2',product_img3='$product_image3',
product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$update_id'";
			 
			     
			     $run_update =mysqli_query($con, $update_product);
				 
				 
				 if($run_update)
				 {
					  echo "<script>alert('product updated successfully !')</script>";
					  echo "<script>window.open('index.php?view_products','_self')</script>";
				 }
				 }
		}

	

	   
	   ?>
     
	   
   <?php } ?>
