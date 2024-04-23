<?php

include 'mongodb.php';
include 'Global/session.php';

/*$bruger = findBruger('jakob');
//$toString = json_encode($bruger);
echo $bruger;
*/
/*
$person = findPersonMedId('Queen',4);
foreach ($person as $data) {
    echo $data['fornavn'];
    echo $data['efternavn'];
    echo $data['fDag'];
    echo $data['fSted'];
    echo $data['køn'];
    echo $data['dDag'];
    echo $data['dSted'];
}
*/
$opdaterPerson = updatePerson("Kongen",15,"Helle R","Foersom","Kvinde","01/01/1808","København","20/01/1863","Glücksburg","Birgit",20,"Jørgen",21);
?>