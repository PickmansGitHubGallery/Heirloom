<?php
include '../Logik/personKlasse.php';
include '../mongodb.php';
include '../global/header.php';
include '../global/navbar.php';
include '../global/footer.php';

// Jeg sætter brugernavnet til at starte med med stort bogstav
$username = ucfirst($_POST['username']);

// tjekker om brugeren findes i databasen
$findesBruger = findBruger($username);
if ($username == !$findesBruger) {
  // hvis bruger ikke findes oprettes brugeren i databasen med hashet kodeord
  $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    opretBruger($username, $hashPassword, $_POST['email']);
    echo "<p class='opret-bruger-besked'>Brugeren er nu oprettet</p>";
    echo "<p class='opret-bruger-besked'>Du bliver ført til Log ind siden.</p>";
    header("refresh:3;url=/heirloom/UI/logIndSide.php");
} else {
    // hvis brugeren findes i forvejen får brugeren en besked om at brugeren findes.
    echo "<p class='opret-bruger-besked'>Brugeren findes allerede.</p>";
    echo "<p id='sletPersonInfo'>Personen bliver slettet... Vent venligst</p>";
    echo "<p class='opret-bruger-besked'>Du bliver ført tilbage til opret Bruger siden.</p>";
    header("refresh:3;url=/heirloom/UI/opretBrugerSide.php");

}
?>