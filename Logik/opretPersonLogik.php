<?php
include '../Logik/personKlasse.php';
include '../mongodb.php';
include '../global/header.php';
include '../global/navbar.php';
include '../global/footer.php';
header("refresh:5;url=/heirloom/index.php");

function changeDateFormatToDMY($date) {
  $date = date('d-m-Y', strtotime($date));
  return $date;
}
//Her ændrer jeg datoen fra Y-m-d til d-m-Y
$fdag = changeDateFormatToDMY($_POST['fDag']);
$ddag = changeDateFormatToDMY($_POST['dDag']);

//Her opretter jeg en ny person og indsætter den i databasen.
$person = new Person ($_POST['fornavn'], $_POST['efterNavn'], $fdag,$_POST['fSted'], $_POST['køn'], $ddag, $_POST['dSted']);


insertOneToDatabase($person);

echo "Personen er nu oprettet i databasen.";
echo "<br>";
?>
