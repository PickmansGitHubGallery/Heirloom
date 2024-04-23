<?php
include '../Global/session.php';
include '../Global/tjekAdgang.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../mongoDB.php';
?>

<html>
    <body>
        <section class="visPerson">
  <?php  
// Check if ID parameter exists in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Retrieve person's information based on ID
    $username = $_SESSION['username'];
    $personInfo = findPersonMedId($username,(int)$id);
    
    if (empty($personInfo)) {
      echo '<div class="fejlPerson">Personen blev ikke fundet.</div>';
  }
  foreach($personInfo as $data) {

    echo "<h2>Person Information</h2>";
    echo "<p>ID: " . $data['id'] . "</p>";
    echo "<p>Fornavn: " . $data['fornavn'] . "</p>";
    echo "<p>Efternavn: " . $data['efternavn'] . "</p>";
    echo "<p>Fødselsdag: " . $data['fDag'] . "</p>";
    echo "<p>Fødselssted: " . $data['fSted'] . "</p>";
    echo "<p>Køn: " . $data['køn'] . "</p>";
    echo "<p>Dødsdag: " . $data['dDag'] . "</p>";
    echo "<p>Dødssted: " . $data['dSted'] . "</p>";
    echo "<p>Mor: " . $data['mor'] . "</p>";
    echo "<p>Mor ID: " . $data['morId'] . "</p>";
    echo "<p>Far: " . $data['far'] . "</p>";
    echo "<p>Far ID: " . $data['farId'] . "</p>";
}

}
?>
        </section>
    </body>
</html>
