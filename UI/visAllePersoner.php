<?php
include '../Global/session.php';
include '../Global/tjekAdgang.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../mongoDB.php';

$navn = $_SESSION['username'];

$allePersoner = visAllePersoner($navn);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST["person_id"];
    $username = $_SESSION['username'];
    deletePerson($username,(int)$id);
    header("Refresh:5");
    echo "<p id='sletPersonInfo'>Personen bliver slettet... Vent venligst</p>";
   
}

?>

<html>
<head>
</head>
<body>
    
<h2>Alle Personer</h2>
<table>
    <tr>
        <th class='hide_text_tablet'>ID</th>
        <th>Vis Profil</th>
        <th>Fornavn</th>
        <th>Efternavn</th>
        <th>Fødselsdag</th>
        <th class="hide_text_mobile">Fødselssted</th>
        <th class='hide_text_tablet'>Køn</th>
        <th class='hide_text_mobile'>Dødsdag</th>
        <th class='hide_text_mobile'>Dødssted</th>
        <th class='hide_text_tablet'>Mor</th>
        <th class='hide_text_tablet'>Mor ID</th>
        <th class='hide_text_tablet'>Far</th>
        <th class='hide_text_tablet'>Far ID</th>
        <th class='hide_text_tablet'>Slet</th>
        <th class='hide_text_tablet'>Rediger</th>
    </tr>
    <?php foreach ($allePersoner as $person) : ?>
        <?php $personlink = "visPersonProfil.php?id=" . $person['id']; ?>
        <?php $morlink = "visPersonProfil.php?id=" . $person['morId']; ?>
        <?php $farlink = "visPersonProfil.php?id=" . $person['farId']; ?>
        <tr>
            <?php $personId = $person['id']; ?>
            <td class='hide_text_tablet'><?php echo $person['id']; ?></td>
            <td><?php echo "<a href=$personlink>" . $person['id'] . "</a>"; ?></td>
            <td><?php echo $person['fornavn']; ?></td>
            <td><?php echo $person['efternavn']; ?></td>
            <td><?php echo $person['fDag']; ?></td>
            <td class='hide_text_mobile'><?php echo $person['fSted']; ?></td>
            <td class='hide_text_tablet'><?php echo $person['køn']; ?></td>
            <td class='hide_text_mobile'><?php echo $person['dDag']; ?></td>
            <td class='hide_text_mobile'><?php echo $person['dSted']; ?></td>
            <td class='hide_text_tablet'><?php echo $person['mor']; ?></td>
            <td class='hide_text_tablet'> <?php echo "<a href=$morlink>" . $person['morId'] . "</a>"; ?></td>
            <td class='hide_text_tablet'><?php echo $person['far']; ?></td>
            <td class='hide_text_tablet'> <?php echo "<a href=$farlink>" . $person['farId'] . "</a>"; ?></td>
            <td class='hide_text_tablet'>   <form method="post">
                    <input type="hidden" name="person_id" value="<?php echo $person['id']; ?>">
                    <input type="submit" name="delete" value="slet person">
                </form>
            </td>
            <td class='hide_text_tablet'>  <form method="post" action="redigerPerson.php">
                    <input type="hidden" name="person_id" value="<?php echo $person['id']; ?>">
                    <input type="submit" name="edit" value="opdater person">
                </form>
        </tr>
    <?php endforeach; ?>
    
    
</table>
</body>
</html>
