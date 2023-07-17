<?php

require_once __DIR__ . "/Lib/config.php"; 
require_once __DIR__ . "/lib/session.php";
require_once __DIR__ . "/Lib/pdo.php"; 
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/Lib/menu.php"; 
require_once __DIR__ . "/templates/header.php";



?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="/assets/images/LOGO.png" class="d-block mx-lg-auto img-fluid" alt="Garage Parrot" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bienvenue dans notre garage</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="Véhicule.php" class="btn btn-danger btn-lg px-4 me-md-2">Nos véhicules</a>
            <a href="services.php" class="btn btn-danger btn-lg px-4 me-md-2">Nos services</a>
            <a href="Contact.php" class="btn btn-danger btn-lg px-4 me-md-2">Nous contacter</a>
        </div>
    </div>
</div>
<?php
    require_once __DIR__ . "/Lib/Avis.php"; 
?>


<?php require_once __DIR__ . "/templates/footer.php"; ?>