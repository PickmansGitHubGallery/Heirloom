<?php
include '../Global/session.php';
include '../Global/logout.php';
include '../Global/header.php';
include '../Global/navbar.php';
include '../Global/logout.php';
include '../Logik/getApi.php';
?>
<style>
    section {
        margin: 0 auto;
        width: 50%;
        text-align: center;
    }
    section h4 {
        font-size: 50px;
        font-weight: bold; 
    }
    section p {
        font-size: 20px;
    }
</style>
<body>
    <section>
        <h4>Gode Råd</h4>
        <p> <?php echo hentApi()?></p> 
    </section>
</body>

<?php
include '../Global/footer.php';
?>