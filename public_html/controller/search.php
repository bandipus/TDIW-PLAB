<?php

require_once __DIR__.'/../model/connectDb.php';

$conn = getConn();

$palabra = $_GET['busqueda'];

require_once __DIR__.'/../model/products.php';
$products = getProductsByKeyWord($conn, $palabra);


if (!empty($products)) {
    require __DIR__.'/../view/search.php';
} else {
    require __DIR__.'/../view/search_failed.php';
}