<div class="contenedor-crear-cuenta">
    <div class="formulario">
            <form  action="/crearcuenta" method="POST">
                <div class="campo">
                    <label for="usuario">Usuario</label>
                    <input name="usuario" type="text" id="usuario" placeholder="ingresa tu usuario">
                </div>
                <div class="campo">
                    <label for="password">Contraseña</label>
                    <input name="password" type="password" id="password" placeholder="crea una contraseña">
                </div>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input name="email" type="text" id="email" placeholder="ingresa tu e-mail">
                </div>
                <div class="campo">
                    <label for="phone">Teléfono</label>
                    <input name="phone" type="number" id="phone" placeholder="ingresa tu numero telefónico">
                </div>
                <input type="submit" value="Crear Cuenta" class="boton">
            </form>
    </div>
</div>
<div class="regresar"><a href="/" class="enlace">REGRESAR</a></div>