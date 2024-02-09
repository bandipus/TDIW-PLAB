<div class="productes">
    <div>
        <a  onclick="CarregaCategories()"><img src="img/flecha_atras.png" width="30px"></a>
        <h1><?php echo $category["nom"]; ?></h1>
    </div>     
    <ul id="id-productes">
        <?php foreach ($products as $product) : ?>
            <li class='product'>
                <a onclick="CarregaDetall('<?php echo $product['id']; ?>')">
                    <img src="<?php echo $product['imatge']; ?>" alt="<?php echo $product['nom']; ?>" width='400px'>
                    <p><?php echo $product['nom']; ?></p>
                    <p>Precio: <?php echo $product['preu']; ?>€</p>
                </a>
                <button onclick="AddCart('<?php echo $product['id']; ?>', '<?php echo $product['nom']; ?>', '<?php echo $product['preu']; ?>', '1', '<?php echo $product['imatge']; ?>', '<?php echo $product['categoria_id']; ?>')">Añadir al carrito</button>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
