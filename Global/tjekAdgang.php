<?php 
//tjekker om der er en bruger logget ind
if (!isset($_SESSION['username'])) {
  // hvis man ikke er logget ind bliver man ført til log ind siden
  header("Location: ../UI/logIndSide.php");
}
?>
