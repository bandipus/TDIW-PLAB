  <!-- LOGING -->

<?php if(isset($alert)) {?>
    <p> Contraseña incorrecta! </p>
<?php } unset($alert);?>

<section class="login">
    <div class="login-container">
        <form class="login-form" id="loginForm" method="post" action="index.php?action=login">
            <h1>Login</h1>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Iniciar sesión</button>
        </form>
    
        <div class="login-register">
            <p>¿No tienes cuenta? <a href="index.php?action=register">Registro</a></p>
            
        </div>
    </div>
</section>