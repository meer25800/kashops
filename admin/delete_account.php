<form action="" method="post">
      
	  <table align="center" width="600">
	     
		 <tr align="center">
		    <td colspan="2"><h2>Do you want to delete your account?</h2></td>
		
		 </tr>
		    
		 <tr align="center">
		 
		    <td><input type="submit" name="yes" value="I Want To Delete "/></td>
			<td><input type="submit" name="no" value="I Do not want to delete"/></td>
         </tr>		 
	          
	  </table>


</form>
<?php

  include("includes/db.php");
  
  $c=$_SESSION['customer_email'];
  
  if(isset($_POST['yes']))
  {
	  $delete_customer="delete from customers where customer_email='$c'";
	  
	  $run_delete=mysqli_query($con,$delete_customer);
	  
	  if($run_delete)
	  {   
          session_destroy(); 
		  echo"<script>alert('Your Account has been deleted')</script>";
		  echo"<script>window.open('../index1.php','_self')</script>";
		  
	  }
	  
  }
  
     if(isset($_POST['no']))
	 {
		 echo "<script>window.open('my_account.php','_self')</script>";
		 
	 }



?>