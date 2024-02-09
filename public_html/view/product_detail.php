<a class="back-button"  onclick="CarregaProductes(<?php echo $categoriaProducte['id']; ?>)"><img src="img/flecha_atras.png" width="30px"></a>
<section class="product-layout">
    <div class="product-image">
        <?php
            echo "<img src=".$product['imatge']." alt=".$product['nom']." width='500px'>";
        ?>
    </div>
    <div class="product-info">
    <?php
        echo "<h2>".$product['nom']."</h2>
            <p>Categoria: ".$categoriaProducte['nom']."</p>
            <p>Preu: ".$product['preu']." €</p>
            <p>Descripció:<br>".$product['descripcio']."</p>
            <div>
                <button onclick='AddCart(".$product['id'].", \"".$product['nom']."\", ".$product['preu'].", document.getElementById(\"quantity\").value, \"".$product['imatge']."\", ".$product['categoria_id'].")'>Añadir al carrito</button>
                <input type='text' id='quantity' placeholder='1' value='1' pattern='[0-9]' title='Solo se admiten numeros'>
            </div>";
    ?>

    </div>
</section>

