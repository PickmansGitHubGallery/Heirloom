<?php
require_once __DIR__ . '/vendor/autoload.php';
include_once 'Logik/personKlasse.php';

function insertOneToDatabase($person){
//Forbindelse til databasen
$client = new MongoDB\Client('mongodb://localhost:27017');
//Hvilken databasen jeg vil bruge.
$user = $_SESSION['username'];
$collection = $client->heirloom->$user;

$id = $person->getId();
$fornavn = $person->getForNavn();
$efternavn = $person->getEfterNavn();
$køn = $person->getKøn();
$fDag = $person->getFDag();
$fDag = $person->getFDag();
$fSted = $person->getfSted();
$dDag = $person->getDDag();
$dSted = $person->getdSted();

$collection->insertOne([
    'id' => $id,
    'fornavn' => $fornavn,
    'efternavn' => $efternavn,
    'køn' => $køn,
    'fDag' => $fDag,
    'fSted' => $fSted,
    'dDag' => $dDag,
    'dSted' => $dSted
]);
}
function opretBruger($username,$password,$email){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->brugerInfo;
    $collection->insertOne([
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'idCounter' => '0'
    ]);
}
function findBruger($username){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->brugerInfo;
    $cursor = $collection->find(['username' => $username]);
    foreach ($cursor as $document) {
        $bruger = $document['username'];
        return $bruger;
    }
}
function insertIdCount($counter){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->brugerInfo;
    $collection->insertOne([
        'idCounter' => $counter
    ]);
}
function findIdCounter($username){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->brugerInfo;
    $cursor = $collection->find(['username' => $username]);
    foreach ($cursor as $document) {
        $counter = $document['idCounter'];
            return $counter;
        }
}

function addToIdCounter($username){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->brugerInfo;
    $bruger = findBruger($username);
    $counter = findIdCounter($bruger);
    $counter = $counter + 1;
    $collection->updateOne(
        ['username' => $bruger],
        ['$set' => ['idCounter' => $counter]]
    );
}

function tjekBruger($username,$password){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->brugerInfo;
    $cursor = $collection->find(['username' => $username]);
    foreach ($cursor as $document) {
        $hash = $document['password'];
        if (password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
}

function findPersonMedId($username, $personId){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->$username;
    $cursor = $collection->find(['id' => $personId]);
    return $cursor->toArray(); // Fetching results from the cursor and returning as an array
}


function updatePerson($personId,$username,$fornavn,$efternavn,$fDag,$fSted,$køn,$dDag,$dSted){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->heirloom->$username;
    $collection->updateOne(
        ['id' => $personId],
        ['$set' => ['fornavn' => $fornavn]],
        ['$set' => ['efternavn' => $efternavn]],
        ['$set' => ['fDag' => $fDag]],
        ['$set' => ['fSted' => $fSted]],
        ['$set' => ['køn' => $køn]],
        ['$set' => ['dDag' => $dDag]],
        ['$set' => ['dSted' => $dSted]]
    );
}
?>