<!-- Kavindya-IT22604330-->
<?php
           include_once 'config.php';
		   include_once 'conn.php';
		   
		   
		   ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catalogue</title>
	<link rel="stylesheet" href="./styles/new 3.css">
	<link rel="stylesheet" href="./styles/Catalogue.css">
	
	
	
	</head>

<body>
<!-- Include the header using php -->
    <?php include 'Header.html'; 
	    
	?>
	
<h2>Update and delete from Catalogue</h2>
<?php		
     $result=mysqli_query($conn,'SELECT * FROM `item`;');
	 
      echo "<table class= 'table table-bordered table-hover' >";
      echo "<tr style='background-color: white;'>";

      echo "<th>"; echo "Item_ID"; echo "</th>";	  
	  echo "<th>"; echo "Title"; echo "</th>";
	 echo "<th>"; echo "Author"; echo "</th>";
	 echo "<th>"; echo "Catagory"; echo "</th>";
	 echo "<th>"; echo "Status"; echo "</th>";
	 echo "<th>Actions</th>"; // New column for actions
	 
	  echo "</tr>";
	 
	 while($row= mysqli_fetch_assoc($result))
	 {
		 echo "<tr>";
	     echo "<td>". $row['Item_id']."</td>";
		 echo "<td>". $row ['Item_title']."</td>";
		 echo "<td>". $row ['Author']."</td>";
		 echo "<td>". $row ['Catagory']."</td>";
		 echo "<td>". $row ['Status']."</td>";
		 
		 echo "<td>";
    echo "<a href='editItem.php?id=" . $row['Item_id'] . "'>Edit</a>"; 
    echo " | ";
    echo "<a href='deleteItem.php?id=" . $row['Item_id'] . "'>Delete</a>"; 
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>