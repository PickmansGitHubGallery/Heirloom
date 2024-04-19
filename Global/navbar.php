<html>
<nav class="navbar">
    <div class="container">
        <ul class="nav-links">
            <li><a href="../UI/opretPersonSide.php">Opret Person</a></li>
            <li><a href="../UI/visPerson.php">Vis Person</a></li>
            <li><a href="../UI/sletPerson.php">Slet Person</a></li>
            <li><a href="../UI/visAllePersoner.php">Vis Alle Personer</a></li>
        </ul>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="logout-form">
    <button type="submit" name="logout" class="logout-btn">Log Off</button>
  </form>
    </div>
</nav>
</html>