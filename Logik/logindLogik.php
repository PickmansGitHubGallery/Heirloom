<?php

include '../Global/session.php';
include '../mongodb.php';

$bruger = ucfirst($_POST['username']);
echo $_POST['username'];

function tjekLogin($bruger){
  if(tjekBruger($bruger, $_POST['password']) == true){
    header("Location: ../index.php");
  } else {
    echo "Brugernaavn eller kodeord er forkert";
  }
}
tjekLogin($bruger);
?>