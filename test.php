<?php

include 'mongodb.php';
include 'Global/session.php';

/*$bruger = findBruger('jakob');
//$toString = json_encode($bruger);
echo $bruger;
*/

echo findIdCounter('Kongen');
echo $_SESSION['username'];
?>