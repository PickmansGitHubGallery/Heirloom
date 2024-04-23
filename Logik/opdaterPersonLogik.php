<?php
include '../Global/session.php';
include '../Logik/personKlasse.php';
include '../mongodb.php';
include '../global/header.php';
include '../global/navbar.php';
include '../global/footer.php';



//Her opretter jeg en ny person og indsætter den i databasen.
$person = new Person (0,0,0,0,0,0,0,0,0,0,0,0);
$person->setId($_POST['id']);
$person->setFornavn($_POST['fornavn']);
$person->setEfternavn($_POST['efterNavn']);
$person->setFdag($_POST['fDag']);
$person->setFsted($_POST['fSted']);
$person->setKøn($_POST['køn']);
$person->setDdag($_POST['dDag']);
$person->setDsted($_POST['dSted']);
$person->setMor($_POST['mor']);
$person->setFar($_POST['far']);
$person->setMorId($_POST['morId']);
$person->setFarId($_POST['farId']);


updatePerson($person);

echo "Personen er nu opdateret.";
?>