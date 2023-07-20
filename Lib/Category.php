<?php

function getCategories($pdo) {
    $sql = 'SELECT * FROM vehicule';
    $query = $pdo->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
}