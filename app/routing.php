<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 07/10/18
 * Time: 09:56
 */


// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Category' => [ // Controller
        ['index', '/category', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
    ],
];
