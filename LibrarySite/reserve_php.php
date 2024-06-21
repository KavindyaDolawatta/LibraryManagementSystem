<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $bookTitle = $_POST["book-title"];
  $author = $_POST["author"];
  $userName = $_POST["user-name"];
  $email = $_POST["email"];
  $pickupDate = $_POST["date"];

 
  echo "<h2>Reservation Successful!</h2>";
  echo "<p>Thank you, $userName, for reserving the book '$bookTitle' by $author. It will be available for pickup on $pickupDate.</p>";
} else {
  
  echo "<h2>Error: Invalid request</h2>";
  echo "<p>Please submit the form to reserve a book.</p>";
}
?>
