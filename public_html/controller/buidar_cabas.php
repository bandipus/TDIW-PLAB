<?php

require_once __DIR__.'/../model/cart.php';

buidarCabas();

header('Location: /../index.php?action=cart');
exit;