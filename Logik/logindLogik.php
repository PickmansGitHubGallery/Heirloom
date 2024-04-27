<?php

include '../Global/session.php';
include '../mongodb.php';

// brugernanvet bliver sat til at starte med med stort bogstav
$bruger = ucfirst($_POST['username']);
echo $_POST['username'];

// tjekker om brugeren findes i databasen
function tjekLogin($bruger){
  if(tjekBruger($bruger, $_POST['password']) == true){
    header("Location: ../index.php");
  } else {
    echo "Brugernavn eller kodeord er forkert";
  }
}
// kalder funktionen tjekLogin
tjekLogin($bruger);
?>