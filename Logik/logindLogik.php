<?php

include '../mongodb.php';

$bruger = ucfirst($_POST['username']);

function tjekLogin($bruger){
  if(tjekBruger($bruger, $_POST['password']) == true){
    echo "Du er nu logget ind";
  } else {
    echo "Brugernaavn eller kodeord er forkert";
  }
}
tjekLogin($bruger);
?>