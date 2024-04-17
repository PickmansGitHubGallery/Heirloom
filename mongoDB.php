<?php
require_once __DIR__ . '/vendor/autoload.php';

function insertOneToDatabase($person){
//Forbindelse til databasen
$client = new MongoDB\Client('mongodb://localhost:27017');
//Hvilken databasen jeg vil bruge.
$collection = $client->heirloom->personer;

$fornavn = $person->getForNavn();
$efternavn = $person->getEfterNavn();
$køn = $person->getKøn();
$fDag = $person->getFDag();
$fDag = $person->getFDag();
$fSted = $person->getfSted();
$dDag = $person->getDDag();
$dSted = $person->getdSted();

$collection->insertOne([
    'fornavn' => $fornavn,
    'efternavn' => $efternavn,
    'køn' => $køn,
    'fDag' => $fDag,
    'fSted' => $fSted,
    'dDag' => $dDag,
    'dSted' => $dSted
]);
}


function selectFromDatabase(){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->users->userinfo;
    $cursor = $collection->find(['name' => 'Jakob'], ['projection' => ['name' => 1,'username' => 1, 'email' => 1]]);
    foreach ($cursor as $document) {
        echo "Name: " . $document['name'] . ", Username: " . $document['username'] . ", Email: " . $document['email'] . "\n";
    }
}

function selecetFromId($id){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->users->userinfo;
    $cursor = $collection->find(['id' => $id], ['projection' => ['fornavn' => 1, 'efternavn' => 1, 'køn' => 1, 'fdag' => 1, 'fSted' => 1, 'dDag', 'dSted' => 1], ]);
    foreach ($cursor as $document) {
        echo "Fornavn: " . $document['fornavn'] . ", Efternavn: " . $document['efternavn'] . ", Køn: " . $document['køn'] . " \n";
    }
}
?>