<?php
if(isset($_POST['logout'])) {
  // Unset all session variables
  session_unset();

  // Destroy the session
  session_destroy();

  // Redirect the user to a login page or any other desired page
  header("Location: ../index.php"); // Redirect to login page
  exit();
}
?>