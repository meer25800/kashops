<?php

 @session_start();

include("includes/db.php");


if(isset($_GET['edit_account']))
{
	
	
	$customer_email=$_SESSION['customer_email'];
	
	$get_customer="select * from customers where customer_email='$customer_email'";
	
	$run_customer=mysqli_query($con,$get_customer);
	
	$row=mysqli_fetch_array($run_customer);
	
	$id=$row['customer_id'];
	
	$name=$row['customer_name'];
    $email=$row['customer_email'];
	$pass=$row['customer_pass'];
	$country=$row['customer_country'];
	$city=$row['customer_city'];
	$contact=$row['customer_contact'];
	$address=$row['customer_address'];
	$image=$row['customer_image'];
	
	
}


 ?>
 
 <form action="" method="post" enctype="multipart/form-data">
                 
				 <table align="center" width="600" bgcolor="#9999cc">
				 
				 <tr>
				    <td colspan="8" align="center">Update Your Account: </h2> </td>
				 </tr>
				 
				 
				 <tr>
				    <td align="right">Customer Name:  </td>
					<td> <input type="text" name="c_name" value="<?php echo $name; ?>"></td>
				 </tr>
				 
				 
				 <tr>
				    <td align="right">Customer Email:  </td>
					<td> <input type="text" name="c_email" value="<?php echo $email; ?>"></td>
				 </tr>
				 
				 
				 <tr>
				    <td align="right">Customer Password:  </td>
					<td> <input type="password" name="c_pass" value="<?php echo $pass; ?>"></td>
				 </tr>
				 
				  <tr>
				    <td align="right">Customer Country:  </td>
					<td>  
					   <select name="c_country" disabled>
					     <option value="<?php echo $country;?>"><?php echo $country;  ?> </option>
						 <option> India           </option>
						 <option> Afghanistan     </option>
						 <option> Pakistan        </option>
						 <option> China           </option>
						 <option> Bangladesh      </option>
						 <option> Japan           </option>
						 <option> Sudia Arabia    </option>
						 <option> USA             </option>
						 <option> England         </option>
						 <option> Srilanka        </option>
						 <option> Germany         </option>
						 <option> Canada          </option>
					 
					 </select>
					
					</td>
				 </tr>
				 
				 <tr>
				     <td align="right"><b>Customer City:</b></td>
					 <td><input type="text" name="c_city" value="<?php echo $city; ?>"></td>
					 
					 
				  </tr>
				  
				   <tr>
				     <td align="right"><b>Customer Mobile No:</b></td>
					 <td><input type="text" name="c_contact" value="<?php echo $contact; ?>"/></td>
					 
					 
				  </tr>
				   <tr>
				     <td align="right"><b>Customer Address:</b></td>
					 <td><input type="text" name="c_address" size="45" value="<?php echo $address; ?>" /></td>
					 
					 
				  </tr>
				  
				  <tr>
				     <td align="right"><b>Customer Image:</b></td>
					 <td><input type="file" name="c_image" size="60"><img src="customer_photos/<?php echo $image; ?>"width="60" height="60"/></td>
					 
					 
				  </tr>
				  
				    
				  <tr>
				     
					 <td align="center" colspan="8"><input type="submit" name="update_account"  value="Update Account" color="blue"/></td>
					 
					 
				  </tr>
				  
				 </table>
 
 </form>
 
 <?php   
 
         if(isset($_POST['update_account']))
			 
		 
		 {
			$update_id=$id;
			
            $c_name=$_POST['c_name'];
			$c_email=$_POST['c_email'];
			$c_pass=$_POST['c_pass'];
			$c_city=$_POST['c_city'];
			$c_contact=$_POST['c_contact'];
			$c_address=$_POST['c_address'];
			$c_image=$_FILES['c_image']['name'];
			$c_image_tmp=$_FILES['c_image']['tmp_name'];
			
			move_uploaded_file($c_image_tmp,"customer_photos/$c_image");
			
			$update_c="update customers set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass',
			customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address', customer_image='$c_image' where customer_id='$update_id'";
             

            $run_c=mysqli_query($con,$update_c);
            
               if($run_c)
			   {
				   echo "<script>alert('your account has been updated! ') </script>";
				   echo "<script>window.open('my_account.php',_self')</script>";
			   }				   
			 
		 }
 
 
 
 ?>