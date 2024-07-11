<?php
  function  aamir()
  {
        global $db;
	     $get_products ="select * from products order";
				
				$run_products =mysqli_query($db, $get_products);
				
				while($row_products=mysqli_fetch_array($run_products))
 {
				
				
				$pro_id =$row_products['product_id'];
				$pro_title =$row_products['product_title'];
				
				$pro_desc =$row_products['product_desc'];
				$pro_price =$row_products['product_price'];
				$pro_image =$row_products['product_img1'];
				
				
				echo "
				<div id='single_product'>
				<h3>$pro_title</h3>
				<img src ='admin_area/product_images/$pro_image' width='180' height='180'/>
				<p><b>price: Rs $pro_price</b></p>
				<a href ='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
				<a href ='index.php?add_cart=$pro_id'><button style ='float:right;'>Add to Cart</button>
				</a>
				</div>";
 }
				}
				?>