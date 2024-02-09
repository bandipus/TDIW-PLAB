<?php 

require_once __DIR__.'/../model/connectDb.php';
$conn = getConn();

require_once __DIR__.'/../model/categories.php';

$categories = getCategories($conn);

for ($i = 0; $i < count($categories); $i++) {
    $categories[$i]['nom'] = htmlentities($categories[$i]['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

require __DIR__.'/../view/category_list.php';
