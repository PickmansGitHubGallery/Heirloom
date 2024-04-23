<?php
include 'Global/session.php';
if(isset($_POST['logout'])) {
  // Unset all session variables
  session_unset();

  // Destroy the session
  session_destroy();

  // Redirect the user to a login page or any other desired page
  header("Location: index.php"); // Redirect to login page
  exit();
}
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
    <section class="navbar-container">
        <ul class="nav-links">
            <li><a href="UI/logindSide.php">Login</a></li>
            <li><a href="UI/opretBrugerSide.php">Opret Bruger</a></li>
            <li><a href="UI/opretPersonSide.php">Opret Person</a></li>
            <li><a href="UI/visPerson.php">Vis Person</a></li>
            <li><a href="UI/visAllePersoner.php">Vis Alle Personer</a></li>
        </ul>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="logout-form">
    <button type="submit" name="logout" class="logout-btn">Log ud</button>
  </form>
    </section>
</nav>
<section class="velkomst-side">
  <article class="vekomst-side-teks">
    <p>Velkommen til Heirloom, <?php
    if (isset($_SESSION['username'])){
      echo $_SESSION['username'];
    }else{
      echo 'Gæst';
    } 
     ?></p>
    <img src="public/images/tree.jpg" alt="tree" width="750" height="750">
  </article>
</section>
</body>
<footer>
  <section class="footer">
    <p>&copy; <?php echo date("Y"); ?> Your Website. All rights reserved.</p>
  </section>
</footer>
</html>