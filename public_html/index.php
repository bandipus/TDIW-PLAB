<?php
define('UPLOADS_PUBLIC_PATH', 'img/');
define('UPLOADS_FULL_PATH', '/home/TDIW/tdiw-j3/public_html/img/');

session_start();

$action = $_GET['action'] ?? NULL;

switch ($action) {
    case 'categories':
        require __DIR__.'/controller/category_list.php'; 
        break;
    case 'productes':
        require __DIR__.'/controller/product_list.php'; 
        break;
    case 'product_details':
        require __DIR__. '/controller/product_detail.php'; 
        break;
    case 'login':
        require __DIR__. '/resource_login.php'; 
        break;
    case 'register':
        require __DIR__. '/resource_register.php';
        break;
    case 'account':
        require __DIR__. '/resource_my_account.php';
        break;
    case 'logout':
        require __DIR__. '/resource_logout.php';
        break; 
    case 'cart':
        require __DIR__. '/resource_shopping_cart.php';
        break;
    case 'add':
        require __DIR__. '/controller/add_cart.php';
        break;
    case 'edit_profile':
        require __DIR__. '/resource_edit_profile.php';
        break;
    case 'login_result':
        require __DIR__. '/resource_login_result.php';
        break;
    case 'search':
        require __DIR__."/controller/search.php"; 
        break;
    case 'buidar':
        require __DIR__. '/resource_buidar_cabas.php';
        break;
    case 'confirmar':
        require __DIR__. '/resource_confirmar_comanda.php';
        break;
    case 'eliminar_producte':
        require __DIR__. '/resource_eliminar_producte.php';
        break;
    case 'quantity':
        require __DIR__. '/resource_modify_quantity.php';
        break;
    case 'basquet':
        require __DIR__. '/resource_llista_comanda.php';
        break;
    case 'comanda_confirmada':
        require __DIR__. '/resource_comanda_confirmada.php';
        break;
    default:
        require __DIR__.'/resource_portada.php'; 
        break;
}