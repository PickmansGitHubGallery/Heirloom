<?php 
// Start the session
session_start();

// Check if the username is submitted via a form or fetched from a database
if(isset($_POST['username'])) {
    // Assuming username is fetched from a form input
    $username = $_POST['username'];
    // Save the username in the session
    $_SESSION['username'] = $username;
}

// To retrieve the username from the session
/*if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Du er logget ind som $username!";
} else {
    echo "Log ind tak.";
}
*/
?>