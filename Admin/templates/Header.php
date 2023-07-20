<?php

$adminMenu = [
    'index.php' => 'Accueil',
    'articles.php' => 'Articles',
    'Service.php' => 'Services',
    'Garage.php' => 'Info Garage',
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/override-bootstrap.css">

</head>

<body>
    <div class="container d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Admin</span>
            </a>
            <hr>
            <ul class="nav nav-pills- flex-column mb-auto">
                <?php foreach ($adminMenu as $page => $titre) { ?>
                    <li class="nav-item"><a href="<?= $page; ?>" class="nav-link text-white <?php if (basename($_SERVER['SCRIPT_NAME']) === $page) {
                                                                                        echo 'active';
                                                                                    } ?>"><?= $titre; ?></a></li>
                <?php } ?>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong><?= $_SESSION["user"]["first_name"]; ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="/logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
        <main class="d-flex flex-column px-4">