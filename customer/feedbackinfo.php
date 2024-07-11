 
<table>  
                       <tr> <td "style=align:center">Name</td> <td>Email</td> <td>Message</td> <td>Open/reply</td></tr>
            
</table>
<?php
 echo" <h1>feedback information </h1> ";
  
 $conn= mysqli_connect("localhost","root" , "" , "myshop")  or die("hey fuckerr..who going to connect to db...") ;
 
    $query="SELECT * FROM contact_us " ;
	
    $run=mysqli_query($conn , $query) ; 
	
	  while($row=mysqli_fetch_array($run ) ){
		  
		  ?>
		  <tr>
		     <td><?php echo $row['uname'] ?></td>
			 <td><?php echo $row['uemail'] ?></td>
			 <td><?php echo $row['comment'] ?></td>
			 <td><a href="reply.php?name=<?php echo $row["uname"] ;?>">open</a></td>
		  </tr>
		  <?php
	  }
	  
	
	
?>