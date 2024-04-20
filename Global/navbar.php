<html>
<nav class="navbar">
    <section class="navbar-container">
        <ul class="nav-links">
            <li><a href="../index.php">Forside</a></li>
            <li><a href="../UI/opretPersonSide.php">Opret Person</a></li>
            <li><a href="../UI/visPerson.php">Vis Person</a></li>
            <li><a href="../UI/visAllePersoner.php">Vis Alle Personer</a></li>
        </ul>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="logout-form">
        <button type="submit" name="logout" class="logout-btn">Log Off</button>
        </form>
    </section>
</nav>
</html>