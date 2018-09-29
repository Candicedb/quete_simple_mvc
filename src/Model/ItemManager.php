<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 29/09/18
 * Time: 10:06
 */

// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

// récupération de tous les items
function selectAllItems() :array
{
    $pdo = new \PDO(DSN, USER, PASS);
    $query = "SELECT * FROM item";
    $res = $pdo->query($query);
    return $res->fetchAll();
}

?>
