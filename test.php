<?php

include 'mongodb.php';
include 'Global/session.php';

/*$bruger = findBruger('jakob');
//$toString = json_encode($bruger);
echo $bruger;
*/

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

?>