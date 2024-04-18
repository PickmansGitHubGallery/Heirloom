<?php 
if (!isset($_SESSION['username'])) {
  // Redirect the user to the index.php page
  header("Location: ../UI/logIndSide.php");
}
?>
