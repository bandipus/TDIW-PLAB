<section class="tools">    
    <nav>
        <ul class="menu-horizontal">
            <li>
                <a href="#"><img src="img/logo_usuario_negro.png" alt="" width="25px"></a>
                <?php if(!isset($_SESSION['user_id'])) { ?>
                    <ul class="menu-vertical" id="menu-unlogged">
                        <li><a href="index.php?action=login">Login</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="menu-vertical" id="menu-logged">
                        <li><a href="index.php?action=account">Mi cuenta</a></li>
                        <li><a href="index.php?action=basquet">Mis compras</a></li>
                        <li><a href="index.php?action=logout">Cerrar sesión</a></li>
                    </ul>
                <?php } ?>
            </li>
            
            <li>
                <a href="#"><img src="img/3_barras.png" alt="" width="25px"></a>
                <ul class="menu-vertical">
                    <li><a href="index.php">Categorías</a></li>
                <?php foreach ($categories as $category) {
                    echo "<li>
                            <a onclick=CarregaProductes(".$category['id'].")>"
                                .$category['nom'].'
                            </a>
                        </li>';
                }
                ?>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="search">
        <form onsubmit="serch(document.getElementById('busqueda').value); return false;">
            <input type="text" id="busqueda" name="busqueda" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </form>
    </div>

    <div class="tool-carro">
        <div>
            <p>Productos: <?php echo isset($_SESSION['total_quantity']) ? $_SESSION['total_quantity'] : 0; ?></p>
            <p>Precio: <?php echo isset($_SESSION['total']) ? $_SESSION['total'] : 0; ?>€</p>
        </div>
        <a href="index.php?action=cart"><img src="img/carro_negro.png" alt="" width="25px"></a>
    </div>
    
</section>

<div class="mesage">
    <p><?php echo isset($_SESSION['user_id']) ? "Se ha añadido correctamente" : "Debes iniciar sesion"; ?></p>
</div>