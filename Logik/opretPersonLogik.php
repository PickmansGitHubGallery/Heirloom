<?php
include 'personKlasse.php';
include 'database.php';
include 'global/header.php';
include './global/navbar.php';

//Her opretter jeg en ny person og indsætter den i databasen.
$person = new Person ($_POST['fornavn'], $_POST['efterNavn'], $_POST['fDag'],$_POST['fSted'], $_POST['køn'], $_POST['dDag'], $_POST['dSted']);


insertToDatabase($conn, $person);

echo "Personen er nu oprettet i databasen.";
echo "<br>";
?>
