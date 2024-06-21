<!-- Kavindya-IT22604330-->
<?php
include_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $itemId = $_POST['itemId'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    // Update the item in the database
    $query = "UPDATE `item` SET `Item_title` = '$title', `Author` = '$author', `Catagory` = '$category', `Status` = '$status' WHERE `Item_id` = '$itemId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Item updated successfully.";
    } else {
        echo "Error updating item: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>