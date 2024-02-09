<!-- REGISTER -->
<section class="register">
    <div class="register-container">
        <form class="register-form" id="registerForm" method="POST" action="index.php?action=register">
            <h1>Registro</h1>
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" pattern="[A-Za-z ]{1,}" title="Solo caracteres y espacios" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" pattern="[A-Za-z0-9]{1,}" title="Solo caracteres alfanuméricos" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" maxlength="30" required>
            
            <label for="poblacion">Población:</label>
            <input type="text" id="poblacion" name="poblacion" maxlength="30" required>
            
            <label for="codigoPostal">Código Postal:</label>
            <input type="text" id="codigoPostal" name="codigoPostal" pattern="[0-9]{5}" title="Debe ser un código postal válido de 5 dígitos" required>
            
            <button type="submit">Registrarse</button>
        </form>
    </div>
</section>