<?php
if(isset($_SESSION['cart'])){

    require_once __DIR__.'/../model/connectDb.php';
    $conn = getConn();

    require_once __DIR__.'/../model/comanda.php';
    $dataComanda = date('d-m-Y');
    $totalQuantity = $_SESSION["total_quantity"];
    $preuTotalComanda = $_SESSION["total"];
    $idUsuari = $_SESSION['user_id'];

    $idComanda = registrarComanda($conn, $dataComanda, $totalQuantity, $preuTotalComanda, $idUsuari);

    $porductes = $_SESSION["cart"];
 
    foreach ($_SESSION["cart"] as $clave => $productId) {
  
        $productName = $_SESSION["p_name"][$productId]; 
        $quantitat = $_SESSION["p_quantity"][$productId];
        $preuUnitari = $_SESSION["p_price"][$productId];
        $preuTotal = $_SESSION["p_amount"][$productId];

        registrarLiniaComanda($conn, $productName, $quantitat, $preuUnitari, $preuTotal, $idComanda, $productId);
    }   
    
    require_once __DIR__.'/../model/cart.php';
    buidarCabas();

    header('Location: /../index.php?action=comanda_confirmada');
}
else{
    header('Location: /../index.php?action=cart');
}
