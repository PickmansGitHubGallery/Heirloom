<?php
if(isset($_POST['logout'])) {
  // Fjerner alle session variabler
  session_unset();

  // Desturere sessionen og data som er gemt i sessionen
  session_destroy();

  // Fører brugeren til index siden
  header("Location: ../index.php");

  // Afslutter scriptet
  exit();
}
?>