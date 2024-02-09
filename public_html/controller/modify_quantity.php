<?php

$action = $_GET['action2'];
$productId = $_GET['producte'];
$productQuantiy = $_GET['product_quantity'];

require_once __DIR__.'/../model/cart.php';

modifyQuantity($action, $productId, $productQuantiy);

header('Location: /../index.php?action=cart');
exit;