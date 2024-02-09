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

    $_SESSION['user_name'] = $nom;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_cp'] = $codi_postal;
    $_SESSION['user_poblacio'] = $poblacio;
    $_SESSION['user_adreça'] = $adreça;

    $imgName = NULL;
    if(!empty($_FILES['img']) && !empty($_FILES['img']['name'])) {
        $imgName = basename($_FILES['img']['name']);
        $imgPath = sprintf('%s%s', UPLOADS_FULL_PATH, $imgName);

        move_uploaded_file($_FILES['img']['tmp_name'], $imgPath);
    }

    $_SESSION['user_img'] = $imgName;

    $conn = getConn();

    editProfile($conn, $nom, $email, $pw, $adreça, $poblacio, $codi_postal, $imgName);

    header('Location: /../index.php?action=account');
}

require __DIR__.'/../view/edit_profile.php';