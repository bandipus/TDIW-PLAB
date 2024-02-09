<?php

function register($conn, $nom, $email, $pw, $adreça, $poblacio, $cp, $img) {
    $sql = "INSERT INTO public.usuari(nom, email, contraseña, adreça, poblacio, codi_postal, img) 
            VALUES ($1, $2, $3, $4, $5, $6, $7)";

    $pw_encrypted = password_hash($pw, PASSWORD_DEFAULT);
    
    $params = [$nom, $email, $pw_encrypted, $adreça, $poblacio, $cp, $img];

    $result = pg_query_params($conn, $sql, $params);
}

function editProfile($conn, $nom, $email, $pw, $adreça, $poblacio, $cp, $img) {
    $sql = "UPDATE public.usuari
            SET nom = $1, contraseña = $3, adreça = $4, poblacio = $5, codi_postal = $6, img = $7
            WHERE email = $2;";

    $pw_encrypted = password_hash($pw, PASSWORD_DEFAULT);
    
    $params = [$nom, $email, $pw_encrypted, $adreça, $poblacio, $cp, $img];

    $result = pg_query_params($conn, $sql, $params);
}

function login($conn, string $email, string $password) {
    $sql = 'SELECT *
            FROM usuari
            WHERE email = $1
            LIMIT 1';

    $params = [$email];

    $result = pg_query_params($conn, $sql, $params);
    $usuari = pg_fetch_array($result);

    if ($usuari === false) {
        return null;
    }

    if (password_verify($password, $usuari['contraseña'])) {
        return $usuari;
    }
    else {
        return null;
    }
}