<!-- Ashani-IT22604194-->
<?php
include_once 'config.php';

// Check if the item ID is provided
if (isset($_GET['username'])) {
    // Retrieve the username
    $username = $_GET['username'];

    // Delete the item from the database
    $query = "DELETE FROM `member` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "user deleted successfully.";
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>