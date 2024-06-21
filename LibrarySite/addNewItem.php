<!-- Kavindya-IT22604330-->
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Librarian</title>
	<link rel="stylesheet" href="./styles/new 3.css">
	<link rel="stylesheet" href="./styles/librarian.css">
	 <link rel="stylesheet" href="./styles/form.css">
	
	
	</head>

<body>
<!-- Include the header using php -->
    <?php include 'Header.html'; 
	?>
	
<h2>Welcome to Librarian's Administrative page</h2>	
	
<h3>Catalouge Management</h3>
<center>
<h2>Add new Item</h2>
 
<form action= "submitAddNew.php" method="POST">
   Item title:
   <input type="text" name="field1"><br/><br/>   

   Author:
   <input type="text" name="field2"><br/><br/>     
   
    Catagory:
   <input type="text" name="field3"><br/><br/>     
   
    Status:
   <input type="text" name="field4"><br/><br/> 


   <input type = "submit" id="submitBtn" value="Submit">
  </form>	