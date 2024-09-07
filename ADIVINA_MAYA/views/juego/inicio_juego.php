<div class="contenedor-juego">
    <h1>Bienvenido</h1>
    <div class="contenedor-formulario">
        <form method="POST" action="/adivina">
            <div class="campo">
                <label for="numero">Valor de la figura</label>
                <input name="numero" type="number" id="numero" placeholder="ingresa el valor numérico">
            </div>
            <input type="submit" value="¡Adivinar!" class="boton">
        </form>
    </div>
    <div class="contenedor-enlace">
        <a href="jugadores" class="enlace-jugadores">Ver Jugadores</a>
    </div>
</div>
<div class="Salir"><a href="/logout" class="enlace">SALIR</a></div>