<?php
    require_once __DIR__.'/../model/connectDb.php';
    $conn = getConn(); 
    
    require_once __DIR__.'/../model/categories.php';
    
    $categories = getCategories($conn);
    
    for ($i = 0; $i < count($categories); $i++) {
        $categories[$i]['nom'] = htmlentities($categories[$i]['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }


    $productId = $_GET['product_id'];
    $productNom = $_GET['product_nom'];
    $productPreu = $_GET['product_preu'];
    $productQuantiy = $_GET['product_quantity'];
    $productImg = $_GET['product_img'];
    $categoryId = $_GET['category_id'];

    require_once __DIR__.'/../model/cart.php';
    addToCart($productId, $productNom, $productPreu, $productQuantiy, $productImg, $categoryId);   
    
          
    require __DIR__.'/../view/add_cart.php';
    
?> 