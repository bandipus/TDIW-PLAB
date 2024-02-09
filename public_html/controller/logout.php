<?php
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_img']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_cp']);
        unset($_SESSION['user_poblacio']);
        unset($_SESSION['user_adreça']);
        unset($_SESSION["cart"]);
        unset($_SESSION["p_name"]);
        unset($_SESSION["p_quantity"]);
        unset($_SESSION["p_amount"]);
        unset($_SESSION["p_price"]);
        unset($_SESSION["p_img"]);
        unset($_SESSION["total"]);
        unset($_SESSION["total_quantity"]);

        header('Location: /../index.php?action=login');
        exit;
    }
