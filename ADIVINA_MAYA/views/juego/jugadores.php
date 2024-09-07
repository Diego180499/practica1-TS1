<?php

use Model\Usuario;

$usuarios = Usuario::obtenerUsuarios();
?>

<div class="contenedor-tabla">
    <table class="tabla">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Puntos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <?php  while($usuario = $usuarios->fetch_object()){
            echo("<tbody>
            <tr>
            <td>".htmlspecialchars($usuario->username)."</td>
            <td>".htmlspecialchars($usuario->points)."</td>
            <td><a href='#' class='enlace-editar'>Editar</a></td>
            <td><a href='/eliminar?username=".$usuario->id."' class='enlace-eliminar'>Eliminar</a></td>
            </tr>
        </tbody>");
        }?>
    </table>
</div>
<div class="regresar"><a href="/adivina" class="enlace">REGRESAR</a></div>