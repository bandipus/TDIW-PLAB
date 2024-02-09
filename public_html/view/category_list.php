<section class="categories">
    <h1>Categorías</h1>
    <ul id="id-categories">
        <?php foreach ($categories as $category){
            echo "<li class='category'>
                <a onclick=CarregaProductes(".$category['id'].")>
                    <img src=".$category['imatge']." alt=".$category['nom']." width='400px'><p>".$category['nom']."</p>
                </a>
            </li>";
        }
        ?>
    </ul>
</section> 