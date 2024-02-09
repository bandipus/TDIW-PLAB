<?php

function buidarCabas() {
    if (isset($_SESSION['cart'])) {
        $_SESSION["total"] = 0;
        $_SESSION["total_quantity"] = 0;
        
        unset($_SESSION["cart"]);
        unset($_SESSION["p_name"]);
        unset($_SESSION["p_quantity"]);
        unset($_SESSION["p_amount"]);
        unset($_SESSION["p_price"]);
        unset($_SESSION["p_img"]);
    }
}

function eliminaProducte($productId) {
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION["total"] -= $_SESSION["p_amount"][$productId];
        $_SESSION["total_quantity"] -= $_SESSION["p_quantity"][$productId];

        unset($_SESSION["cart"][$productId]);
        unset($_SESSION["p_name"][$productId]);
        unset($_SESSION["p_quantity"][$productId]);
        unset($_SESSION["p_amount"][$productId]);
        unset($_SESSION["p_price"][$productId]);
        unset($_SESSION["p_img"][$productId]);
    }
}

function addToCart($productId, $productNom, $productPreu, $productQuantiy, $productImg, $categoryId) {
    if(isset($_SESSION['user_id'])){ 

        if(!isset($_SESSION["cart"][$productId])) { 
            $_SESSION["cart"][$productId] = $productId;
            $_SESSION["p_name"][$productId] = $productNom;
            $_SESSION["p_price"][$productId] = $productPreu;
            $_SESSION["p_quantity"][$productId] = $productQuantiy;
            $_SESSION["p_amount"][$productId] = $productPreu * $productQuantiy;
            $_SESSION["p_img"][$productId] = $productImg;
            
        } 
        else { // Ya tenemos este producto en el carrito 
            $_SESSION["p_quantity"][$productId] = $_SESSION["p_quantity"][$productId] + $productQuantiy;
            $_SESSION["p_amount"][$productId] += $_SESSION["p_price"][$productId] * $productQuantiy;
        }
        $_SESSION["total"] += $_SESSION["p_price"][$productId] * $productQuantiy;
        $_SESSION["total_quantity"] += $productQuantiy;
    }  
}

function modifyQuantity($action, $productId, $productQuantiy) {
    if(isset($_SESSION['user_id'])){ 

      if($action == sum) {
        $_SESSION["p_quantity"][$productId] = $_SESSION["p_quantity"][$productId] + $productQuantiy;
        $_SESSION["p_amount"][$productId] += $_SESSION["p_price"][$productId] * $productQuantiy;
        
        $_SESSION["total"] += $_SESSION["p_price"][$productId] * $productQuantiy;
        $_SESSION["total_quantity"] += $productQuantiy;
        }
        elseif ($action == res) {
            $_SESSION["p_quantity"][$productId] = $_SESSION["p_quantity"][$productId] - $productQuantiy;
            $_SESSION["p_amount"][$productId] -= $_SESSION["p_price"][$productId] * $productQuantiy;
            
            $_SESSION["total"] -= $_SESSION["p_price"][$productId] * $productQuantiy;
            $_SESSION["total_quantity"] -= $productQuantiy;

            if ($_SESSION['p_quantity'][$productId] < 1){ 
                eliminaProducte($productId);
            }
        }
    }  
}