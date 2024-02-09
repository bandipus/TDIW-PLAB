<?php

require_once __DIR__.'/../model/connectDb.php';
$conn = getConn();

require_once __DIR__.'/../model/products.php';
require_once __DIR__.'/../model/comanda.php';
$comandes = getComanda($conn, $_SESSION['user_id']);

if ($comandes) {
    foreach ($comandes as $comanda) {
        $liniesComanda = getLiniaComanda($conn, $comanda['id']);
        if ($liniesComanda) {
            $liniesComandaArray[$comanda['id']][] = $liniesComanda;
            foreach ($liniesComanda as $comanda) {
                $images[$comanda['producte_id']] = getProductImageById($conn, $comanda['producte_id']);
            }
        }

    }
}

require_once __DIR__.'/../view/llista_comanda.php';