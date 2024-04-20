<?php
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';

?>

<html>
<body>
  <section class="login">
    <h1>Login</h1>
  <form action="../Logik/logindLogik.php" method="POST">
    <label for="uname">Brugernavn:</label>
    <input name="username" id="uname" type="text"></input>
    <label for="passw">Kodeord:</label>
    <input name="password" id="passw" type="password"></input>
    <input value="Login" type="submit"></input>
  </form>
  </section>
</body>

</html>