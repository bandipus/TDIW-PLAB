<div class="llista-comandes">
    <body>
        <h2>Lista de Pedidos</h2>

        <?php if (empty($comandes)) : ?>
            <p>No has realizado ningún pedido</p>
        <?php else : ?>
            <?php foreach (array_reverse($comandes) as $comanda) : ?>
                <table class="tabla-comandes">
                    <tr>
                        <th>ID del pedido</th>
                        <th>Fecha Creación</th>
                        <th>Número de Elementos</th>
                        <th>Importe Total</th>
                    </tr>
                    <tr>
                        <td><?php echo $comanda['id']; ?></td>
                        <td><?php echo $comanda['data_creació']; ?></td>
                        <td><?php echo $comanda['número_elements']; ?></td>
                        <td><b><?php echo $comanda['import_total']; ?>€</b></td>
                    </tr>
                </table>

                <?php if (isset($liniesComandaArray[$comanda['id']])) : ?>
                    <table class="tabla-linea-comandes">
                        <tr>
                            <th>Imagen del producto</th>
                            <th>Nombre del Producto</th>
                            <th>Precio Unitario</th>
                            <th>Cantidad</th>
                            <th>Precio Total</th>
                        </tr>
                        <?php foreach (array_reverse($liniesComandaArray[$comanda['id']]) as $liniaComanda) : ?>
                            <?php foreach ($liniaComanda as $producteComanda) : ?>
                                <tr>
                                <td><img src="<?php echo $images[$producteComanda['producte_id']]; ?>" alt="Imagen del Producto"></td>
                                    <td><?php echo $producteComanda['nom_producte']; ?></td>
                                    <td><?php echo $producteComanda['preu_unitari']; ?>€</td>
                                    <td><?php echo $producteComanda['quantitat']; ?></td>
                                    <td><b><?php echo $producteComanda['preu_total']; ?>€</b></td>      
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
                <div class="barra-negra"></div>
            <?php endforeach; ?>
        <?php endif; ?>

    </body>
</div>
