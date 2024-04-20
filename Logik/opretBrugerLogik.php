<?php
include '../Logik/personKlasse.php';
include '../mongodb.php';
include '../global/header.php';
include '../global/navbar.php';
include '../global/footer.php';


$username = ucfirst($_POST['username']);


$findesBruger = findBruger($username);
if ($username == !$findesBruger) {
  $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    opretBruger($username, $hashPassword, $_POST['email']);
    echo "Brugeren er nu oprettet";
    header("refresh:3;url=/heirloom/UI/logIndSide.php");
} else {
    echo "Brugeren findes allerede";
    header("refresh:3;url=/heirloom/UI/opretBrugerSide.php");

}
?>