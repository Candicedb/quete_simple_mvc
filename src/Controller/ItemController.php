<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 29/09/18
 * Time: 10:06
 */


// src/Controller/ItemController.php
require __DIR__ . '/../Model/ItemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';
?>
