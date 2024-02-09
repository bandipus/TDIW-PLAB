<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once __DIR__.'/../model/connectDb.php';
        require_once __DIR__.'/../model/users.php';

        $filters = filter_input_array(
            INPUT_POST,
            [
                'email' => FILTER_DEFAULT,
                'password' => FILTER_DEFAULT,
            ]
        );
        
        $email = $filters['email'];
        $password = $filters['password'];
        
        $conn = getConn();
        $user = login($conn, $email, $password);

        if($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nom'];
            $_SESSION['user_img'] = $user['img'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_cp'] = $user['codi_postal'];
            $_SESSION['user_poblacio'] = $user['poblacio'];
            $_SESSION['user_adreça'] = $user['adreça'];
            $_SESSION['total'] = 0;
            $_SESSION["total_quantity"] = 0;
    
        } else {
            $alert = "Contraseña incorrecta";
        }
    }

    if (isset($_SESSION['user_id'])) {
        header('Location: /../index.php?action=login_result');
    }
    
    else {
        include __DIR__.'/../view/login.php';
    }   