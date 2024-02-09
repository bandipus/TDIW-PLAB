<?php

$productId = $_GET['producte'];

require_once __DIR__.'/../model/cart.php';

eliminaProducte($productId);

header('Location: /../index.php?action=cart');
exit;