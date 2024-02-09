<?php

/**
 * @param int $categoryId
 * 
 * @return array
*/
function getProductsByCategory($conn, int $categoryId): array
{
    $sql = 'SELECT *
    FROM producte
    WHERE categoria_id = $1';

    $params = [$categoryId];

    $result = pg_query_params($conn, $sql, $params);
    $products = pg_fetch_all($result);

    return $products;
}

/**
 * @param int $productId
 * 
 * @return array
 */
function getProductById($conn, int $productId): array
{
    $sql = 'SELECT *
    FROM producte
    WHERE id = $1';

    $params = [$productId];

    $result = pg_query_params($conn, $sql, $params);
    $products = pg_fetch_array($result);

    return $products;
}

function getProductImageById($conn, int $productId)
{
    $sql = 'SELECT imatge
    FROM producte
    WHERE id = $1';

    $params = [$productId];

    $result = pg_query_params($conn, $sql, $params);
    $image = pg_fetch_result($result, 0, 'imatge');

    return $image !== false ? $image : null;
}

function getProductsByKeyWord($conn, string $keyword): array
{
    $sql = 'SELECT *
    FROM producte
    WHERE nom ILIKE $1 OR descripcio ILIKE $1';

    $params = ["%" . $keyword . "%"];

    $result = pg_query_params($conn, $sql, $params);
    $products = pg_fetch_all($result);

    if ($products == False) {
        return [];
    }
    
    return $products;
}