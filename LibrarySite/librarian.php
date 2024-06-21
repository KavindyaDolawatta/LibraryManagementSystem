<!-- Kavindya-IT22604330-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Librarian</title>
	<link rel="stylesheet" href="./styles/new 3.css">
	<link rel="stylesheet" href="./styles/librarian.css">
	
	</head>

<body>
<!-- Include the header using php -->
    <?php include 'Header.html'; 
	       include 'config.php';
		   include 'conn.php';
	?>
<h2>Welcome to Librarian's Administrative page</h2>	
	
<h3>Catalouge Management</h3>	
	<!--Add buttons  -->
<div class="button-container">
  <button type="submit"><a href="addNewItem.php">Add new item</a></button>
  
  <button type="submit"><a href="UpdateDeleteCatalog.php">Update / Delete</a></button>
</div>

<h3>Member Management</h3>	
<div class="button-container">
   <button type="submit"><a href="submitUpdatememberDetails">Add new Member</a></button>
  <button type="submit"><a href="deleteMember.php">Delete member Details</a></button>
  <button type="submit"><a href="Edit%20user%20acc.html">Update member details</a></button>
</div>	

</body>
</html>