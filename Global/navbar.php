<html>
<nav class="navbar">
    <section class="navbar-menu">
        <ul class="nav-links">
            <li><a href="../index.php">Forside</a></li>
            <li><a href="../UI/opretPersonSide.php">Opret Person</a></li>
            <li><a href="../UI/visAllePersoner.php">Vis Alle Personer</a></li>
            <li><a href="../UI/goodAdvice.php">Gode Råd</a></li>
    
            <?php if(isset($_SESSION['username'])) { ?>
            <li>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="logout-form">
                    <button type="submit" name="logout" class="logout-btn">Log ud</button>
                </form>
            </li>
            <?php } ?>
        </ul>
    </section>
</nav>
</html>