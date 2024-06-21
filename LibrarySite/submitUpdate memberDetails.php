<!-- Ashani-IT22604194-->
<?php
include_once 'config.php';

// Check if the username is provided
if (!isset($_GET['username'])) {
    echo "Username is not provided.";
    exit;
}

// Get the username from the URL parameter
$username = $_GET['username'];

// Fetch the user details from the database based on the username
$query = "SELECT * FROM `member` WHERE `username` = '$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Check if the user exists
if (!$user) {
    echo "User not found.";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the update statement
    $query = "UPDATE `member` SET `firstname` = ?, `lastname` = ?, `email` = ?, `password` = ? WHERE `username` = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssss', $firstName, $lastName, $email, $password, $username);

    // Execute the update statement
    if (mysqli_stmt_execute($stmt)) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="./styles/new 3.css">
    <link rel="stylesheet" href="./styles/form.css">
</head>

<body>
    <!-- Include the header using php -->
    <?php include 'Header.html'; ?>

    <h2>Welcome to Librarian's Administrative page</h2>

    <h3>User Management</h3>
    <center>
        <h2>Edit User</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="hidden" name="username" value="<?php echo $user['username']; ?>">

            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $user['firstname']; ?>">

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo $user['lastname']; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $user['password']; ?>">

            <input type="submit" value="Update">
        </form>
    </center>
</body>

</html>