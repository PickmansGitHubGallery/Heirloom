<?php
$servername = "localhost";
$serverUsername = "root";
$serverPassword = "";
$database = "heirloom";

// Create connection
$conn = new mysqli($servername, $serverUsername, $serverPassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

// Metode

function changeDateFormatToYMD($date) {
  $date = date('Y-m-d', strtotime($date));
  return $date;
}
function changeDateFormatToDMY($date) {
  $date = date('d-m-y', strtotime($date));
  return $date;
}

function insertToDatabase($conn, $person) {

  $fornavn = $person->getForNavn();
  $efternavn = $person->getEfterNavn();
  $køn = $person->getKøn();
  //$fDag = $person->getFDag();
  $fDag = changeDateFormatToYMD($person->getFDag());
  $fSted = $person->getfSted();
  $dDag = $person->getDDag();
  $dSted = $person->getdSted();

    $stmt = $conn->prepare("INSERT INTO persontabel (fornavn, efternavn, kon, fDag, fSted, dDag, dSted) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fornavn, $efternavn, $køn, $fDag, $fSted, $dDag, $dSted);
    $stmt->execute();
    $stmt->close();
}
function selectAllFromDatabase($conn) {
  $stmt = $conn->prepare("SELECT * FROM persontabel");
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();
  return $result;
}
function selectPersonFromDatabase($id, $conn) {
  $stmt = $conn->prepare("SELECT * FROM persontabel WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();
  return $result;
}
?>