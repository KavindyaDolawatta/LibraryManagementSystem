<!-- Kavindya-IT22604330-->
<?php
     include_once'config.php';
	 ?>
	 <?php
	 
	   $title= $_POST['field1'];
	   $author= $_POST['field2'];
	   $catagory= $_POST['field3'];
	   $status= $_POST['field4'];
	   
	   
	   $sql= "insert into item(Item_id,Item_title,Author,Catagory,Status)values
	   ('','$title','$author','$catagory','$status')"; 
	   
	   //execute the query//
	   
	   if(mysqli_query($conn,$sql)){
		   echo "<script>alert('record inserted successfully')</script>";
            header("Location:librarian.php");
            		   
	   }else{
		   echo"<script>alert('Error in insertion')</script>";
	   }
	   //close the connection//
	   mysqli_close($conn);
	   ?>
	   
	   