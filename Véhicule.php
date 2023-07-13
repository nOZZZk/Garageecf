<?php

require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/lib/menu.php"; 
require_once __DIR__ . "/templates/header.php";

$articles = getArticles($pdo);

?>

<h1>NOS VEHICULE</h1>

<div class="row text-center">
    <?php foreach ($articles as $key => $article) {
        require __DIR__."/templates/vehicule_part.php";
    } ?>

</div>


</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>