<?php
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/footer.php';
include '../Logik/getApi.php';
?>
<body>
    <section class="good-advice">
        <h4>Gode Råd</h4>
        <p> <?php echo hentApi()?></p> 
    </section>
</body>