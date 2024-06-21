<!-- Kavindya-IT22604330-->
<?php
include_once 'config.php';

// Check if the item ID is provided
if (!isset($_GET['id'])) {
    echo "Item ID is not provided.";
    exit;
}


$itemId = $_GET['id'];

// Fetch the item details
$query = "SELECT * FROM `item` WHERE `Item_id` = '$itemId'";
$result = mysqli_query($conn, $query);
$item = mysqli_fetch_assoc($result);

// Check if the item exists
if (!$item) {
    echo "Item not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="./styles/new 3.css">
	<link rel="stylesheet" href="./styles/form.css">
</head>

<body>
<!-- Include the header using php -->
<?php include 'Header.html'; ?>

<h2>Welcome to Librarian's Administrative page</h2>	
	
<h3>Catalouge Management</h3>
<center>
<h2>Edit Item</h2>

<form action="submitUpdateItem.php" method="POST">
    <input type="hidden" name="itemId" value="<?php echo $item['Item_id']; ?>">

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?php echo $item['Item_title']; ?>">

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value="<?php echo $item['Author']; ?>">

    <label for="category">Category:</label>
    <input type="text" id="category" name="category" value="<?php echo $item['Catagory']; ?>">

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" value="<?php echo $item['Status']; ?>">

    <input type="submit" value="Update">
</form>

</body>
</html>