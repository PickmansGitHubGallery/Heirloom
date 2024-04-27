<?php
include '../Global/session.php';
include '../Global/logout.php';
include '../Global/tjekAdgang.php';
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
        <input type="text" id="fornavn" name="fornavn" required>

        <label for="efterNavn">Efternavn*:</label>
        <input type="text" id="efterNavn" name="efterNavn" required>

        <label for="køn">Køn:</label>
        <input type="text" id="køn" name="køn">

        <label for="fDag">Fødselsdag:</label>
        <input type="text" id="fDag" name="fDag" placeholder="dd/mm/åååå" >

        
        <label for="fSted">Fødselssted:
        <select id="fSted" name="fSted"></select>
        </label>
        <div class='script-div'>
        <script>
        fetch('../public/byer.txt')
        .then(response => response.text())
        .then(data => {
        // Del teksten op i et array af muligheder
        const options = data.split('\n');

        // sætter select elementet
        const select = document.getElementById('fSted');

        // sætter select elementet med muligheder
        options.forEach(option => {
          const optionElement = document.createElement('option');
          optionElement.value = option.trim(); // fjerner whitespace
          optionElement.textContent = option.trim(); // fjerner whitespace
          select.appendChild(optionElement); // tilføjer mulighed til select elementet
        });
      })
      .catch(error => console.error('Kan ikke finde fødested', error));
      </script>
        </div>
        <label for="dDag">Dødsdag:</label>
        <input type="text" id="dDag" name="dDag" placeholder="dd/mm/åååå" >

        <label for="dSted">Dødssted:</label>
        <input type="text" id="dSted" name="dSted">

        <input type="submit" value="Indsend">

        <p>* Skal udfyldes.</p>
    </form>
</section>
</body>
</html>


