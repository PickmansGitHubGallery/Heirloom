<?php
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';

?>
<html>
<body>
<section class="opret-bruger">
    <h1>Opret bruger</h1>
<form action="../Logik/opretBrugerlogik.php" method="POST">
    <label for="username">Brugernavn</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Kodeord</label>
    <input type="password" id="password" name="password" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Opret bruger">
</form>
</section>
</body>
</html>