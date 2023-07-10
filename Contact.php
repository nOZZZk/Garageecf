<?php

    require_once __DIR__ . "/Lib/menu.php"; 
    require_once __DIR__ . "/templates/header.php";

?>

<div class="px-4 py-5 my-5 text-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.478011032226!2d2.3509477697263796!3d48.840816380860566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671edd502cc37%3A0x7277a4bb77a7ef51!2s7%20Rue%20de%20Mirbel%2C%2075005%20Paris!5e0!3m2!1sfr!2sfr!4v1688645516288!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <h1 class="display-5 fw-bold text-body-emphasis">Contact</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Retrouver nous a notre Garage directement au 1 rue des tomates a paris <br> 
            du Lundi au vendredi: 9h-12h / 14h-18h
            le samedi de 9h-12h <br>
            Par telephone au : 06.04.05.06.07
        </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="Formulaire.php" class="btn btn-danger btn-lg px-4 me-sm-3">Prendre Rendez-vous</a>
            </div>
    </div>
</div>

<?php
    require_once __DIR__ . "/Lib/Avis.php"; 
?>

<?php 
    require_once __DIR__ . "/templates/footer.php"; 
?>