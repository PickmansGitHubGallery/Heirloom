<?php
include '../Global/session.php';
include '../Global/tjekAdgang.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../Logik/personKlasse.php';
include '../mongodb.php';
?>

<html>
<body>
<h1>Opdater Person information</h1>

<form method="POST">Indtast Persons ID:</label>
    <input type="text" id="person_id" name="person_id">
    <input type="submit" value="Find">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["person_id"];
    $username = $_SESSION['username'];
    $personRetur = findPersonMedId($username,(int)$id);
    if (empty($personRetur)) {
        echo '<div class="fejlPerson">Personen blev ikke fundet.</div>';
    }
    foreach($personRetur as $data) {
?>
<form method="POST">
    <input type="hidden" name="person_id" value="<?php echo $data['id']; ?>">

    <label for="fornavn">Fornavn*:</label>
        <input type="text" id="fornavn" name="fornavn" value="<?php echo $data['fornavn']; ?>" required>

        <label for="efterNavn">Efternavn*:</label>
        <input type="text" id="efterNavn" name="efterNavn" value="<?php echo $data['efternavn']; ?>"required>

        <label for="køn">Køn:</label>
        <input type="text" id="køn" name="køn"value="<?php echo $data['køn']; ?>">

        <label for="fDag">Fødselsdag:</label>
        <input type="text" id="fDag" name="fDag" placeholder="dd/mm/åååå" value="<?php echo $data['fDag']; ?>">

        <label for="fSted">Fødselssted:</label>
        <input type="text" id="fSted" name="fSted" value="<?php echo $data['fSted']; ?>">
        
        <label for="dDag">Dødsdag:</label>
        <input type="text" id="dDag" name="dDag" placeholder="dd/mm/åååå" value="<?php echo $data['dDag']; ?>" >

        <label for="dSted">Dødssted:</label>
        <input type="text" id="dSted" name="dSted" value="<?php echo $data['dSted']; ?>">

        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
</form>
<?php
    }
}
    // Handle form submission for delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["person_id"];
    $username = $_SESSION['username'];
    
    // Delete the person
    $deletedCount = deletePerson($username, (int)$id);
    /*
    // Check if the person was successfully deleted
    if ($deletedCount > 0) {
        echo '<div class="success-message">Personen blev slettet.</div>';
    } else {
        echo '<div class="error-message">Personen blev ikke fundet eller kunne ikke slettes.</div>';
    }
    */
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["person_id"];
    $username = $_SESSION['username'];
    
    // Prepare the data to update
    $updateData = [
        $fNavn = 'fornavn' => $_POST['fornavn'],
        $eNavn= 'efternavn' => $_POST['efterNavn'],
        $køn = 'køn' => $_POST['køn'],
        $fDag = 'fDag' => $_POST['fDag'],
        $fSted = 'fSted' => $_POST['fSted'],
        $dDag = 'dDag' => $_POST['dDag'],
        $dSted = 'dSted' => $_POST['dSted']
    ];

    updatePerson($id,$username,$fNavn,$eNavn,$fDag,$fSted,$køn,$dDag,$dSted);
}
?>
</body>
</html>
