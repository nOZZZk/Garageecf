<?php
require_once __DIR__ . "/../lib/config.php";
require_once __DIR__ . "/../lib/session.php";
adminOnly();

require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/article.php";
require_once __DIR__ . "/templates/header.php";

if (isset($_GET["page"])) {
    $page = (int)$_GET["page"];
} else {
    $page = 1;
}

$Infos = getInfo($pdo, _ADMIN_ITEM_PER_PAGE_, $page);

?>

<h1 class="py-5">Info Garage</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Ville</th>
            <th scope="col">Telephone</th>
            <th scope="col">Horaire</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Infos as $info) { ?>
            <tr>
                <th scope="row"><?=$info["Id"] ?></th>
                <td><?=$info["Nom"] ?></td>
                <td><?=$info["Ville"] ?></td>
                <td><?=$info["Telephone"] ?></td>
                <td><?=$info["horaire"] ?></td>
                <td>Modifier | Supprimer</td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
require_once __DIR__ . "/templates/footer.php";

?>