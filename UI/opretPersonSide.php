<?php
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
?>

<html>
<body>
<section class="opretPersonForm">
    <h2 id="opretPersonFormOverskrift">Indtast dine oplysninger:</h2>
    <form action="../Logik/opretPersonLogik.php" method="POST">
        <label for="fornavn">Fornavn*:</label>
        <input type="text" id="fornavn" name="fornavn" required><br><br>

        <label for="efterNavn">Efternavn*:</label>
        <input type="text" id="efterNavn" name="efterNavn" required><br><br>

        <label for="køn">Køn:</label>
        <select id="køn" name="køn" >
            <option value="mand">Mand</option>
            <option value="kvinde">Kvinde</option>
            <option value="anden">Andet</option>
        </select><br><br>

        <label for="fDag">Fødselsdag:</label>
        <input type="date" id="fDag" name="fDag" ><br><br>

        <label for="fSted">Fødselssted:</label>
        <input type="text" id="fSted" name="fSted" ><br><br>
        
        <label for="dDag">Dødsdag:</label>
        <input type="date" id="dDag" name="dDag"><br><br>

        <label for="dSted">Dødssted:</label>
        <input type="text" id="dSted" name="dSted"><br><br>

        <input type="submit" value="Indsend">

        <p>* Skal udfyldes.</p>
    </form>
</section>
</body>
</html>


