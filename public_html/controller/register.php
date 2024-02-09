<?php
    require_once __DIR__.'/../model/connectDb.php';
    require_once __DIR__.'/../model/users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $filters = filter_input_array(
        INPUT_POST,
        [
            'nombre' => FILTER_DEFAULT,
            'email' => FILTER_DEFAULT,
            'password' => FILTER_DEFAULT,
            'direccion' => FILTER_DEFAULT,
            'poblacion' => FILTER_DEFAULT,
            'codigoPostal' => FILTER_DEFAULT,
        ]
    );
    
    $nom = $filters['nombre'];
    $email = $filters['email'];
    $pw = $filters['password'];
    $adreça = $filters['direccion'];
    $poblacio = $filters['poblacion'];
    $codi_postal = $filters['codigoPostal'];
    $img = NULL;

    $conn = getConn();
    
    register($conn, $nom, $email, $pw, $adreça, $poblacio, $codi_postal, $img);
}
require __DIR__.'/../view/register.php';