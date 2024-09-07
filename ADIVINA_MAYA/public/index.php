<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\JuegoController;
use MVC\Router;

$router = new Router();


//iniciar sesion
$router->get("/",[LoginController::class, "login"]);
$router->post("/",[LoginController::class, "login"]);
$router->get("/logout",[LoginController::class, "login"]);


//crear cuenta
$router->get("/crearcuenta",[LoginController::class, "crearCuenta"]);
$router->post("/crearcuenta",[LoginController::class, "crearCuenta"]);

//inicio de juego
$router->get("/iniciojuego",[LoginController::class, "inicioJuego"]);
$router->post("/iniciojuego",[LoginController::class, "inicioJuego"]);

//JUEGO CONTROLLER
$router->post("/adivina",[JuegoController::class, "adivinar"]);
$router->get("/adivina",[JuegoController::class, "adivinar"]);
$router->get("/jugadores",[JuegoController::class, "mostrarJugadores"]);
$router->get("/eliminar",[JuegoController::class, "eliminarJugador"]);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();