<?php
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
?>

<html>
<body>
<h1>Enter Person ID</h1>
    <form method="POST">
        <label for="person_id">Person ID:</label>
        <input type="text" id="person_id" name="person_id">
        <input type="submit" value="Submit">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the ID entered by the user
  $id = $_POST["person_id"];

  // Get person information for the entered ID
   /* $person = visPersonMedId($id, $conn);

  // Check if person data is retrieved
  if ($person instanceof Person) {
      // Display person information in a table
      echo "<h1>Person Information</h1>";
      echo "<table>";
      echo "Information";
      echo "<tr><td>ID</td><td>" . $person->getId() . "</td></tr>";
      echo "<tr><td>Fornavn</td><td>" . $person->getForNavn() . "</td></tr>";
      echo "<tr><td>Efternavn</td><td>" . $person->getEfterNavn() . "</td></tr>";
      echo "<tr><td>Køn</td><td>" . $person->getKøn() . "</td></tr>";
      echo "<tr><td>Fødselsdag</td><td>" . $person->getfDag() . "</td></tr>";
      echo "<tr><td>Fødested</td><td>" . $person->getfSted() . "</td></tr>";
      echo "<tr><td>Dødsdag</td><td>" . $person->getdDag() . "</td></tr>";
      echo "<tr><td>Dødsted</td><td>" . $person->getdSted() . "</td></tr>";
    
      echo "</table>";
  } else {
      echo "No data found for ID: $id";
  }
*/
}
?>
</body>
</html>