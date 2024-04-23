<?php
include '../Global/session.php';
include '../Global/tjekAdgang.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../Logik/personKlasse.php';
include '../mongodb.php';
?>

<html>
<body>
    <section class="visPerson">
<h1>Opdater Person information</h1>
<form method="GET" action="visPersonProfil.php">Indtast Persons ID:</label>
    <input type="text" id="id" name="id">
    <input type="submit" value="Find">
</form>
</section>

</body>
</html>
