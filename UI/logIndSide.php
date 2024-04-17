<?php

include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';

?>

<html>
<body>
  <form action="../Logik/logindLogik.php" method="post">
    <label for="uname">Brugernavn:</label>
    <input name="username" id="uname" type="text"></input>
    <br><br>
    <label for="passw">Kodeord:</label>
    <input name="password" id="passw" type="password"></input>
    <br><br>
    <input value="Login" type="submit"></input>
  </form>
  <br>
</body>

</html>