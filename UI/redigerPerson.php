<?php
include '../Global/session.php';
include '../Global/tjekAdgang.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../Logik/personKlasse.php';
include '../mongodb.php';


if(isset($_POST['person_id'])) {
    $id = $_POST['person_id'];

    // Retrieve person's information based on ID
    $username = $_SESSION['username'];
 
    $personInfo = findPersonMedId($username,(int)$id);
    
    if (empty($personInfo)) {
      echo '<div class="fejlPerson">Personen blev ikke fundet.</div>';
    } else
    {
    foreach($personInfo as $data) {
?>
<html>
<section class="opdater-person">
    <h2>Opdater Person</h2>
    <p>Indtast de nye oplysninger:</p>
<form method="POST" action="../Logik/opdaterPersonLogik.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

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

        <label for="mor">Mor:</label>
        <input type="text" id="mor" name="mor" value="<?php echo $data['mor']; ?>">

        <label for="morId">Mor ID:</label>
        <input type="text" id="morId" name="morId" value="<?php echo $data['morId']; ?>">

        <label for="far">Far:</label>
        <input type="text" id="far" name="far" value="<?php echo $data['far']; ?>">

        <label for="farId">Far ID:</label>
        <input type="text" id="farId" name="farId" value="<?php echo $data['farId']; ?>">

        <input type="submit" name="update" value="Opdater">
        
</form>
</section>
<?php
    }
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["person_id"];
    $username = $_SESSION['username'];
    echo "TEST";
    // Prepare the data to update
    $updateData = [
        $fNavn = 'fornavn' => $_POST['fornavn'],
        $eNavn= 'efternavn' => $_POST['efterNavn'],
        $køn = 'køn' => $_POST['køn'],
        $fDag = 'fDag' => $_POST['fDag'],
        $fSted = 'fSted' => $_POST['fSted'],
        $dDag = 'dDag' => $_POST['dDag'],
        $dSted = 'dSted' => $_POST['dSted'],
        $mor = 'mor' => $_POST['mor'],
        $morId = 'morId' => $_POST['morId'],
        $far = 'far' => $_POST['far'],
        $farId = 'farId' => $_POST['farId']
    ];

    updatePerson($id,$username,$fNavn,$eNavn,$fDag,$fSted,$køn,$dDag,$dSted,$mor,$morId,$far,$farId);
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();

}
?>

</body>
</html>
