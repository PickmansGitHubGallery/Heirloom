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
        // Split the text into an array of options
        const options = data.split('\n');

        // Get the select element
        const select = document.getElementById('fSted');

        // Populate the select element with options
        options.forEach(option => {
          const optionElement = document.createElement('option');
          optionElement.value = option.trim(); // Trim whitespace
          optionElement.textContent = option.trim(); // Trim whitespace
          select.appendChild(optionElement);
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


