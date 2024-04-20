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
?>

<html>
<head>
</head>
<body>
    
<h2>Alle Personer</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Fornavn</th>
        <th>Efternavn</th>
        <th>Fødselsdag</th>
        <th>Fødselssted</th>
        <th>Køn</th>
        <th>Dødsdag</th>
        <th>Dødssted</th>
        <th>Mor</th>
        <th>Far</th>
        <th>Slet</th>
    </tr>
    <?php foreach ($allePersoner as $person) : ?>
        <tr>
            <?php $personId = $person['id']; ?>
            <td><?php echo $person['id']; ?></td>
            <td><?php echo $person['fornavn']; ?></td>
            <td><?php echo $person['efternavn']; ?></td>
            <td><?php echo $person['fDag']; ?></td>
            <td><?php echo $person['fSted']; ?></td>
            <td><?php echo $person['køn']; ?></td>
            <td><?php echo $person['dDag']; ?></td>
            <td><?php echo $person['dSted']; ?></td>
            <td><a href="visMor.php?id="><?php echo $personId; echo $personId?></a></td>
            <td><?php echo $person['far']; ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="person_id" value="<?php echo $person['id']; ?>">
                    <input type="submit" name="delete" value="Delete">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $id = $_POST["person_id"];
        $username = $_SESSION['username'];
        deletePerson($username,(int)$id);
        header("Refresh:0");
        echo "Personen er blevet slettet";
    }
    ?>
</table>
</body>
</html>
