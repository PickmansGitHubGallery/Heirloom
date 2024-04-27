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
    echo "<p class='opret-bruger-besked'>Brugeren er nu oprettet</p>";
    echo "<p class='opret-bruger-besked'>Du bliver ført til Log ind siden.</p>";
    header("refresh:3;url=/heirloom/UI/logIndSide.php");
} else {
    echo "<p class='opret-bruger-besked'>Brugeren findes allerede.</p>";
    echo "<p id='sletPersonInfo'>Personen bliver slettet... Vent venligst</p>";
    echo "<p class='opret-bruger-besked'>Du bliver ført tilbage til opret Bruger siden.</p>";
    header("refresh:3;url=/heirloom/UI/opretBrugerSide.php");

}
?>