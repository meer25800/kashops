
<?php  
include("includes/db.php");



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
	 } 
	 table {
		 margin-top:20px;
	 }
	 form {
		 margin-top:-117px;
	 }
	 </style>
      
    </head>
	
	<body bgcolor="grey">
	  
	  
	  <form method="post" action="insert_product.php" enctype="multipart/form-data">
	  
	  
			<table width="794" align="center"  bgcolor="#1076a6">
			
			<tr align="center">
			
			<td colspan="2"><h1>Insert New Product:</h1></td>
			
			</tr>
			
			<tr>
			   <td align="right"><b>Product Title</b></td>
			    <td><input type="text" name="product_title" size=50/></td>
		    </tr>
			
			<tr>
			    <td align="right"><b>Product Category</b></td>
				<td>
				<select name="product_cat">
				  
				  <option>Select a Category</option>
				    
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
				<option> Select Brand</option>
				
				
                  <?php 
					
					$get_brands = "select * from brands";
					
					$run_brands = mysqli_query($con,$get_brands);
					
					
					while ($row_brands=mysqli_fetch_array($run_brands))   {
					
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
			    <td><input type="file" name="product_img1"/></td>
		    </tr>&nbsp
			
			
			<tr>
			  <td align="right"><b>Product Image 2</b></td>
			    <td><input type="file" name="product_img2"/></td>
		    </tr>&nbsp
			
			
			<tr>
			  <td align="right"><b>Product Image 3</b></td>
			    <td><input type="file" name="product_img3"/></td>
		    </tr>
			
			
			<tr>
			    <td align="right"><b>Product Price</b></td>
			    <td><input type="text" name="product_price"/></td>
		    </tr>
			
			
			<tr>
			   <td align="right"><b>Product Description</b></td>
			    <td><textarea name="product_desc" cols="35" rows="10"></textarea></td>
		    </tr>
			
			<tr>
			   <td align="right"><b>Product Keywords</b></td>
			   
			    <td><input type="text" name="product_keywords" size=50/></td>
		    </tr>
			
			<tr align ="center">
			    <td colspan="2"><input type="submit" name="insert_product" value="insert product" style="width: 30%; padding: 12px 20px; margin: 8px 0;
					 display: inline-block; background-color: #4CAF50; color:white; border: 1px solid #ccc; border-radius: 4px;  box-sizing: border-box;"/></td>
		    </tr>
			
			</form>
			</body>
</html>
 
 
        <?php 
		
		
		
		
		if(isset($_POST['insert_product'])){
          
		    //text variables
			
           $product_title = $_POST['product_title'];
           $product_cat = $_POST['product_cat']; 
		   $product_brand = $_POST['product_brand'];
		   $product_price = $_POST['product_price'];
		   $product_desc = $_POST['product_desc'];
		   $status = 'on';
           $product_keywords = $_POST['product_keywords'];


             //image names


              $product_img1 = $_FILES['product_img1']['name'];
              $product_img2 = $_FILES['product_img2']['name'];
               $product_img3 = $_FILES['product_img3']['name'];


                 //temp names
				 
				 $temp_name1 = $_FILES['product_img1']['tmp_name'];
                 $temp_name2 = $_FILES['product_img2']['tmp_name'];
				 $temp_name3 = $_FILES['product_img3']['tmp_name'];
				 
				 
				 if($product_title =='' OR $product_cat =='' OR $product_brand =='' OR $product_price =='' OR $product_desc =='' OR $product_keywords =='' OR $product_img1 =='') {
					 
					 
					echo "<script>alert('Please fill all fields!')</script>";
					exit();
					 
				 }
				 
				 else {
					  // uploading images in its foldder 
					  
					move_uploaded_file($temp_name1,"product_images/$product_img1");
					move_uploaded_file($temp_name2,"product_images/$product_img2");
					move_uploaded_file($temp_name3,"product_images/$product_img3");
					 
				 

             $insert_product = "insert into products(cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords,status) values(
			 '$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords','$status')"; 
			 
			 
			     $run_product =mysqli_query($con, $insert_product);
				 
				 
				 if($run_product)
				 {
					  echo "<script>alert('product inserted successfully !')</script>";
					  echo "<script>window.open('index.php?insert_product','_self')</script>";
				 }
				 }
		}

	

	   
	   ?>
     
	   
  
