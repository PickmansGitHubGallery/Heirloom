<?php
include '../Global/session.php';
include '../Global/tjekAdgang.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../mongoDB.php';

// Check if ID parameter exists in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Retrieve person's information based on ID
    $username = $_SESSION['username'];
    echo $username;
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
    /*// Check if person exists
    if($personInfo) {
        // Display person's information
        echo "<h2>Person Information</h2>";
        echo "<p>ID: " . $personInfo['id'] . "</p>";
        echo "<p>Fornavn: " . $personInfo['fornavn'] . "</p>";
        echo "<p>Efternavn: " . $personInfo['efternavn'] . "</p>";
        echo "<p>Fødselsdag: " . $personInfo['fDag'] . "</p>";
        echo "<p>Fødselssted: " . $personInfo['fSted'] . "</p>";
        echo "<p>Køn: " . $personInfo['køn'] . "</p>";
        echo "<p>Dødsdag: " . $personInfo['dDag'] . "</p>";
        echo "<p>Dødssted: " . $personInfo['dSted'] . "</p>";
        echo "<p>Mor: <a href='more_info_about_mother.php?person_id=" . $personInfo['mor'] . "'>" . $personInfo['mor'] . "</a></p>";
        echo "<p>Far: " . $personInfo['far'] . "</p>";
    } else {
        echo "Person not found.";
    }
} else {
    echo "ID parameter is missing.";
    */
}

}
?>
