<!-- CAMBIAR CLASES CSS Y AÑADIR DE IMAGEN -->
<section class="product-layout">
    <div class="product-image">
    <img src="<?php 
        if ($_SESSION['user_img'] == NULL) {
            echo "/img/default_user.jpg";
        } else {
            echo "/img/" . $_SESSION['user_img'];
        }
    ?>" alt="Imagen de perfil">
    </div>
    <div class="product-info">
    <h2>Información Personal</h2>
    <p><strong>Nombre:</strong> <?php echo $_SESSION['user_name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_SESSION['user_email']; ?></p>

    <h2>Dirección</h2>
    <p><strong>Código postal:</strong> <?php echo $_SESSION['user_cp']; ?></p>
    <p><strong>Población:</strong> <?php echo $_SESSION['user_poblacio']; ?></p>
    <p><strong>Dirección:</strong> <?php echo $_SESSION['user_adreça']; ?></p>
    <a href="index.php?action=edit_profile">
        <button>Editar cuenta</button>
    </a>
    </div>
    <!-- Altres detalls del compte -->
</section>