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

function getTotalArticles(PDO $pdo):int|bool
{
    $sql = "SELECT COUNT(*) as total FROM vehicule";
    $query = $pdo->prepare($sql);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result['total'];
}

function saveArticle(PDO $pdo, string $title, string $content, string|null $image, int $category_id, int $id = null):bool 
{
    if ($id === null) {
        $query = $pdo->prepare("INSERT INTO articles (title, content, image, category_id) "
        ."VALUES(:title, :content, :image, :category_id)");
    } else {
        $query = $pdo->prepare("UPDATE `articles` SET `title` = :title, "
        ."`content` = :content, "
        ."image = :image, category_id = :category_id WHERE `id` = :id;");
        
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
    }

    $query->bindValue(':title', $title, $pdo::PARAM_STR);
    $query->bindValue(':content', $content, $pdo::PARAM_STR);
    $query->bindValue(':image',$image, $pdo::PARAM_STR);
    $query->bindValue(':category_id',$category_id, $pdo::PARAM_INT);
    return $query->execute();  
}

function deleteArticle(PDO $pdo, int $id):bool
{
    
    $query = $pdo->prepare("DELETE FROM articles WHERE id = :id");
    $query->bindValue(':id', $id, $pdo::PARAM_INT);

    $query->execute();
    if ($query->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}