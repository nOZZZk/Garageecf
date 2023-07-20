<?php


require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/article.php";

if (isset($_GET["page"])) {
    $page = (int)$_GET["page"];
} else {
    $page = 1;
}

$services = getServices($pdo, _ADMIN_ITEM_PER_PAGE_, $page);

?>

<h1 class="py-5">Liste des Services</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($services as $service) { ?>
            <tr>
                <th scope="row"><?=$service["Id"] ?></th>
                <td><?=$service["Nom"] ?></td>
                <td><?=$service["Prix"] ?></td>
                <td><?=$service["Description"] ?></td>
                <td>Modifier | Supprimer</td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
require_once __DIR__ . "/templates/footer.php";

?>