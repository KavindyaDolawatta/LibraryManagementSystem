<!-- Kavindya-IT22604330-->
<?php
include_once 'config.php';

// Check if the item ID is provided
if (isset($_GET['id'])) {
   
    $itemId = $_GET['id'];

    
    $query = "DELETE FROM `item` WHERE `Item_id` = '$itemId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Item deleted successfully.";
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>