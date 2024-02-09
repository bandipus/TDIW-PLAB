<?php

function registrarComanda($conn, $dataComanda, $totalQuantity, $preuTotalComanda, $idUsuari) {
    $sql = "INSERT INTO public.comanda(data_creació, número_elements, import_total, usuari_id) 
            VALUES ($1, $2, $3, $4) RETURNING id";

    $params = [$dataComanda, $totalQuantity, $preuTotalComanda, $idUsuari];

    $result = pg_query_params($conn, $sql, $params);

    $comandaRow = pg_fetch_assoc($result);

    return $comandaRow['id'];
}

function registrarLiniaComanda($conn, $productName, $quantitat, $preuUnitari, $preuTotal, $idComanda, $idProduct){
    $sql = "INSERT INTO public.linia_comanda(nom_producte, quantitat, preu_unitari, preu_total, comanda_id, producte_id) 
            VALUES ($1, $2, $3, $4, $5, $6)";

    $params = [$productName, $quantitat, $preuUnitari, $preuTotal, $idComanda, $idProduct];

    $result = pg_query_params($conn, $sql, $params);
}

function getComanda($conn, $userId) {
    $sql = "SELECT id, data_creació, número_elements, import_total 
            FROM public.comanda 
            WHERE usuari_id = $1";

    $params = [$userId];

    $result = pg_query_params($conn, $sql, $params);

    $comanda = pg_fetch_all($result);

    return $comanda;
}

function getLiniaComanda($conn, $idComanda) {
    $sql = "SELECT nom_producte, quantitat, preu_unitari, preu_total, producte_id
            FROM public.linia_comanda
            WHERE comanda_id = $1";

    $params = [$idComanda];

    $result = pg_query_params($conn, $sql, $params);

    $liniaComanda = pg_fetch_all($result);

    return $liniaComanda;
}