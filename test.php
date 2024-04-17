<?php

include 'mongodb.php';

$bruger = findBruger('jakob');
//$toString = json_encode($bruger);
echo $bruger;

?>