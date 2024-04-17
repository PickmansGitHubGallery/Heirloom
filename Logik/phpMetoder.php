<?php
include 'database.php';
include 'personKlasse.php';


//Denne funktion viser en person ud fra et ID
function visPersonMedId($id,$conn){

$person = new Person("","",0,"","","","",0,"");
$result = selectPersonFromDatabase($id, $conn);
if ($result->num_rows > 0) {
    // Fetch the data and display it
    $row = $result->fetch_assoc();

    // Her formatteres datoerne så de vises i formatet dd/mm/yyyy
    $fDag = formatterFdag($row['fdag']);
    $dDag = formatterDdag($row['ddag']);

    // Her sætte værdierne i person objektet
    $person->setId($row['id']);
    $person->setForNavn($row['fornavn']);
    $person->setEfterNavn($row['efternavn']);
    $person->setKøn($row['kon']);
    $person->setfDag($fDag);
    $person->setfSted($row['fsted']);
    $person->setdDag($dDag);
    $person->setdSted($row['dsted']);
    return $person;
    
} else {
    echo "No data found for ID: $id";
}
}


function findAlder() {
  $birthDateStr = $_POST['fDag'];
  $deathDateStr = $_POST['dDag'];
  
  $birthDate = new DateTime($birthDateStr);
  $deathDate = new DateTime($deathDateStr);

  $interval = $birthDate->diff($deathDate);

  // Get the years part of the interval
  $age = $interval->y;

  return $age;
}

function formatterFdag($fDag) {
  return date('d/m/Y', strtotime($fDag));
}

// Function to format dDag date
function formatterDdag($dDag) {
  return date('d/m/Y', strtotime($dDag));
}

?>