<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 29/09/18
 * Time: 10:06
 */


namespace Controller;


use Model\ItemManager;


class ItemController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $itemManager = new ItemManager();
        $items = $itemManager ->selectAllItems();
        require __DIR__ . '/../View/item.php';

    }
}



