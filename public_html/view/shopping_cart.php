<section class="carrito">
    <h2>Carrito de Compras</h2>
    <div>
        <p>Total: <span id="total"> <?php echo isset($_SESSION['total']) ? $_SESSION['total'] : 0; ?>€</span></p>
        <a id="button-pagar" href="index.php?action=confirmar"><button>Confirmar la compra</button></a>
        <a id="button-buidar" href="index.php?action=buidar"><button>Vaciar el carro</button></a>
    </div>
    
    <ul id="productos">
        <?php if (isset($_SESSION['cart'])) : ?>
            <?php foreach ($_SESSION['cart'] as $product) : ?>
                <li class="producto">
                    <img src= <?php echo $_SESSION['p_img'][$product] ?> alt= <?php echo $_SESSION['p_name'][$product] ?>>
                    <h3> <?php echo $_SESSION['p_name'][$product] ?> </h3>
                    
                    <p>Precio: $<?php echo $_SESSION['p_price'][$product] ?> </p>
                    <div id="cantidad"> 
                        <a href="index.php?action=quantity&action2=res&producte=<?php echo $product ?>&product_quantity=1"><button>-</button></a>
                        <p> <?php echo $_SESSION['p_quantity'][$product] ?> </p>
                        <a href="index.php?action=quantity&action2=sum&producte=<?php echo $product ?>&product_quantity=1"><button>+</button></a>
                    </div>
                    
                    <a href="index.php?action=eliminar_producte&producte=<?php echo $product ?>"><button >Eliminar</button></a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</section>