<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $username = $_POST['name'];
    $newPlan = $_POST['new-plan'];
    $paymentMethod = $_POST['payment-method'];

 
    
    header("Location: upgrade_plan.html");
  exit;
}
?>


