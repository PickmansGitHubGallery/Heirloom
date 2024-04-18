<html>
<nav class="navbar">
    <div class="container">
        <div class="logo">Your Logo</div>
        <ul class="nav-links">
            <li><a href="../UI/opretPersonSide.php">Opret Person</a></li>
            <li><a href="../UI/opretBrugerSide.php">Opret Bruger</a></li>
            <li><a href="../UI/logindSide.php">Login</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="logout-form">
    <button type="submit" name="logout" class="logout-btn">Log Off</button>
  </form>
    </div>
</nav>
</html>