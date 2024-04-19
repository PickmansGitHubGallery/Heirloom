<?php
include '../Global/session.php';
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
    $personRetur = findPersonMedId($username,$personRetur); // Assuming this function retrieves person information based on the username
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
        <input type="text" id="dDag" name="dDag" placeholder="dd/mm/åååå" value="<?php echo $data['fDag']; ?>" >

        <label for="dSted">Dødssted:</label>
        <input type="text" id="dSted" name="dSted" value="<?php echo $data['dSted']; ?>">
        <input type="submit" value="Update">
</form>
<?php
    }
}
?>
</body>
</html>
