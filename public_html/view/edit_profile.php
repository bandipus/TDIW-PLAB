<!-- REGISTER -->
<section class="edit-profile">
    <div class="edit-profile-container">
        <form class="edit-profile-form" id="editProfileForm" action="index.php?action=edit_profile" method="POST" enctype="multipart/form-data">
            <h1>Edición del perfil</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" value='<?php echo $_SESSION['user_name']?>' id="nombre" name="nombre" pattern="[A-Za-z ]{1,}" title="Solo caracteres y espacios" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" value='<?php echo $_SESSION['user_email']?>' id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" pattern="[A-Za-z0-9]{1,}" title="Solo caracteres alfanuméricos" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" value='<?php echo $_SESSION['user_adreça']?>' name="direccion" maxlength="30" required>
            
            <label for="poblacion">Población:</label>
            <input type="text" id="poblacion" value='<?php echo $_SESSION['user_poblacio']?>' name="poblacion" maxlength="30" required>
            
            <label for="codigoPostal">Código Postal:</label>
            <input type="text" id="codigoPostal" value='<?php echo $_SESSION['user_cp']?>' name="codigoPostal" pattern="[0-9]{5}" title="Debe ser un código postal válido de 5 dígitos" required>
            
            <label for="img">Imagen de perfil:</label>
            <input type="file" id="img" name="img" required>

            <button type="submit">Guardar cambios</button>
        </form>
    </div>
</section>