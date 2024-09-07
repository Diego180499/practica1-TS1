<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class JuegoController{


    public static function adivinar(Router $router){
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            
            $datos = $_POST;
            $numero = $datos["numero"];
            $usuario = new Usuario("","","",0,0,1);
            $usuarios = $usuario->usuarios();
            echo($usuarios);
        }else{
            $router->render("juego/inicio_juego");
        }
    }

    public static function mostrarJugadores(Router $router){
        $router->render("juego/jugadores");
    }

    public static function eliminarJugador(Router $router){
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            $username = str_replace("username=","",$_SERVER["QUERY_STRING"]);
            Usuario::eliminarUsuarioV2($username);
            JuegoController::mostrarJugadores($router);
            
        }
    }


}