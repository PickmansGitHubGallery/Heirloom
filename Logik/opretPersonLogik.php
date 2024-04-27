<?php
include '../Global/session.php';
include '../Logik/personKlasse.php';
include '../mongodb.php';
include '../global/header.php';
include '../global/navbar.php';
include '../global/footer.php';
header("refresh:5;url=/heirloom/UI/visAllePersoner.php");

function changeDateFormatToDMY($date) {
  $date = date('d-m-Y', strtotime($date));
  return $date;
}
//Her ændrer jeg datoen fra Y-m-d til d-m-Y
//$fdag = changeDateFormatToDMY($_POST['fDag']);
//$ddag = changeDateFormatToDMY($_POST['dDag']);

//Jeg henter brugernavnet fra sessionen så personen bliver gemt under den rigtige bruger.
$username = $_SESSION['username'];
// Jeg finder det næste id til personen
$personId = findIdCounter($username);
// forældre og dødsdag bliver sat til ikke angivet, samt deres id'er bliver sat til 0.
$mor = "Ikke Angivet";
$far = "Ikke Angivet";
$morId = 0;
$farId = 0;
$ddag = null;
//hvis der ikke er angivet en dødsdag bliver den sat til "Ikke Angivet"
if (!isset($_POST['dDag'])){
  $ddag = "Ikke Angivet";
}
//hvis der ikke er angivet en fødselsdag bliver den sat til "Ikke Angivet"
if (!isset($_POST['fDag'])){
  $fdag = "Ikke Angivet";
}

//Her opretter jeg en ny person og indsætter den i databasen.
$person = new Person ($personId,$_POST['fornavn'], $_POST['efterNavn'], $_POST['fDag'],$_POST['fSted'], $_POST['køn'], $ddag, $_POST['dSted'],$mor,$far,$morId,$farId);


//Jeg indsætter personen i databasen
insertOneToDatabase($person);
// Jeg tilføjer 1 til id'et så det næste person der bliver oprettet får det næste id.
addToIdCounter($username);

echo "Personen er nu oprettet i databasen.";
echo "<p id='person-opdateret-besked'>Du bliver nu ført til Vis Alle Personer.</p>";
?>
