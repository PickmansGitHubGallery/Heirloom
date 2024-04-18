<?php
include 'Global/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Heirloom</title>
</head>
</html>
<html>
<body>
<nav class="navbar">
    <div class="container">
        <div class="logo">Your Logo</div>
        <ul class="nav-links">
            <li><a href="UI/logindSide.php">Login</a></li>
            <li><a href="UI/opretBrugerSide.php">Opret Bruger</a></li>
            <li><a href="UI/opretPersonSide.php">Opret Person</a></li>
        </ul>
    </div>
</nav>
<section class="VelkomstSide">
  <div class="center-content">
    <p>Velkommen til Heirloom, <?php echo $_SESSION['username'] ?></p>
    <img src="public/images/tree.jpg" alt="tree" width="750" height="750">
  </div>
</section>
</body>
<footer>
  <section class="footerSection">
    <p>&copy; <?php echo date("Y"); ?> Your Website. All rights reserved.</p>
  </section>
</footer>
</html>