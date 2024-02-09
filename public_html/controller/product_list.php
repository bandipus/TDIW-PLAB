<?php

require_once __DIR__.'/../model/connectDb.php';
$conn = getConn();

$categoryId = $_GET['category_id'];

require_once __DIR__.'/../model/products.php';
$products = getProductsByCategory($conn, $categoryId);

require_once __DIR__.'/../model/categories.php';
$category = getCategoryById($conn, $categoryId);

require __DIR__.'/../view/product_list.php';
