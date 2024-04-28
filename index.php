<?php
include 'Global/session.php';
include 'Logik/getApi.php';
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
    <section class="navbar-menu">
        <ul class="nav-links">
          <!-- hvis brugeren ikke er logget ind, vises login og opret bruger knappen -->
          <?php if(!isset($_SESSION['username'])) { ?>
            <li><a href="UI/logindSide.php">Login</a></li>
          <?php } ?>
            <?php if(!isset($_SESSION['username'])) { ?>
                <li><a href="UI/opretBrugerSide.php">Opret Bruger</a></li>
            <?php } ?>
            <li><a href="UI/opretPersonSide.php">Opret Person</a></li>
            <li><a href="UI/visAllePersoner.php">Vis Alle Personer</a></li>
            <li><a href="UI/goodAdvice.php">Gode Råd</a></li>
            <li><a href="UI/om.php">Om Os</a></li>
            <li><a href="UI/kontakt.php">Kontakt</a></li>
            <!-- Hvis brugeren er logget ind, vises log ud knappen -->
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

<section class="velkomst-side">
  <article class="vekomst-side-tekst">
    <p><b>Velkommen til Heirloom, <?php
    // Hvis brugeren er logget ind, vises brugerens brugernavn
    if (isset($_SESSION['username'])){
      echo $_SESSION['username'];
      echo '<br>';
      echo 'God fornøjelse med at bruge Heirloom!';
    }else{
      echo 'Gæst';
      echo '<br>';
      echo 'Log ind for at få adgang til flere funktioner';
    } 
     ?></b></p>
    <img src="public/images/tree.jpg" alt="tree" width="750" height="750">
  </article>
</section>
</body>
<footer>
  <section class="footer">
    <p>&copy; <?php echo date("Y"); ?> Heirloom. All rights reserved.</p>
  </section>
</footer>
</html>