<?php

include 'mongodb.php';
include 'Global/session.php';

/*$bruger = findBruger('jakob');
//$toString = json_encode($bruger);
echo $bruger;
*/

$person = findPerson('Queen','0');
echo $person['fornavn'];
echo $person['efternavn'];
?>