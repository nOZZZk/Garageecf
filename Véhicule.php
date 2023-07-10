<?php

require_once __DIR__."/lib/config.php";
require_once __DIR__."/lib/pdo.php";
require_once __DIR__."/lib/article.php";
require_once __DIR__ . "/lib/menu.php"; 
require_once __DIR__ . "/templates/header.php";


?>

<h1>NOS VEHICULE</h1>

<div class="row text-center">
    <?php foreach ($articles as $key => $article) { ?>
    <div class="col-md-4 my-2">
    <div class="card">
        <img src="/upload/articles/<?=$article["images"] ?> " class="card-img-top" alt="<?= $article["title"] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= htmlentities($article["title"]) ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="actualite.php?id=<?=$key?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>
<?php } ?>

</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>