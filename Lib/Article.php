<?php

function getArticles(PDO $pdo, int $limit = null, int $page = null ):array
{
    $sql = "SELECT * FROM vehicule ORDER BY id DESC";
    if ($limit && !$page) {
        $sql .= " LIMIT :limit";
    }
    if ($page) {
        $sql .= " LIMIT :offset, :limit";
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page -1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }

    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}


function getArticleById(PDO $pdo, int $id):array|bool
{
    $sql = "SELECT * FROM vehicule WHERE id = :id";

    $query = $pdo->prepare($sql);
    
    $query->bindValue(":id", $id, PDO::PARAM_INT);


    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}

function getArticleImage(string|null $image):string
{
    if ($image === null) {
        return _ASSETS_IMAGES_FOLDER_."default-article.jpg";
    } else {
        return _ARTICLES_IMAGES_FOLDER_.htmlentities($image);
    }
}

function getServices(PDO $pdo, int $limit = null, int $page = null ):array
    {
    $sql = "SELECT * FROM services ORDER BY id DESC";
    if ($limit && !$page) {
        $sql .= " LIMIT :limit";
    }
    if ($page) {
        $sql .= " LIMIT :offset, :limit";
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page -1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }
    
    $query->execute();
    $services = $query->fetchAll(PDO::FETCH_ASSOC);

    return $services;
}

function getInfo(PDO $pdo, int $limit = null, int $page = null ):array
    {
    $sql = "SELECT * FROM garage ORDER BY id DESC";
    if ($limit && !$page) {
        $sql .= " LIMIT :limit";
    }
    if ($page) {
        $sql .= " LIMIT :offset, :limit";
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page -1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }
    
    $query->execute();
    $Infos = $query->fetchAll(PDO::FETCH_ASSOC);

    return $Infos;
}
