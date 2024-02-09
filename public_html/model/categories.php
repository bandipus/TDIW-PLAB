<?php

/**
 * @return array
 */

function getCategories($conn): array
{
    $sql = 'SELECT *
    FROM categoria';
    
    $result = pg_query($conn, $sql);
    $categorias = pg_fetch_all($result);
    return $categorias;
}

/**
 * @param int $categoryId
 * 
 * @return array
 */
function getCategoryById($conn, int $categoryId): array
{
    $sql = 'SELECT *
    FROM categoria
    WHERE id = $1';

    $params = [$categoryId];

    $result = pg_query_params($conn, $sql, $params);
    $categoria = pg_fetch_array($result);

    return $categoria;
}