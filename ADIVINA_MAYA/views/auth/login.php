<div class="contenedor">
    <div class="contenedor-formulario">
        <h1 class="titulo-login">Iniciar Sesión</h1>
        <div class="formulario">
            <form method="POST" action="/">
                <div class="campo">
                    <label for="usuario">Usuario</label>
                    <input name="username" type="text" id="usuario" placeholder="ingresa tu usuario">
                </div>
                <div class="campo">
                    <label for="password">Contraseña</label>
                    <input name="password" type="password" id="password" placeholder="ingresa tu usuario">
                </div>
                <input type="submit" value="Iniciar Sesión" class="boton">
            </form>
        </div>
    </div>
    <div class="opciones">
        <a href="/crearcuenta">¿No tienes cuenta? - Regístrate</a>
        <a href="#">Olvidé mi contraseña</a>
    </div>
</div>