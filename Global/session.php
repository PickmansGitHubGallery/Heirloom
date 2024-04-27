<?php 
// Starter sessionen
session_start();

// tjekker om brugeren er logget ind
if(isset($_POST['username'])) {
    // gemmer brugernavnet i variablen
    $username = $_POST['username'];
    // gemmer brugernavnet i sessionen
    $_SESSION['username'] = $username;
}
?>