<?php

require_once __DIR__.'/../model/connectDb.php';
$conn = getConn();

$productId = $_GET['product_id'];

require_once __DIR__.'/../model/products.php';
$product = getProductById($conn, $productId);

require_once __DIR__.'/../model/categories.php';
$categoriaProducte = getCategoryById($conn, $product['categoria_id']);

require __DIR__.'/../view/product_detail.php';

   