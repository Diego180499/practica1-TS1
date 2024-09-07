<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController{

    public static function login(Router $router){
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $datos = $_POST;
            $usuario = new Usuario($datos['username'],$datos['password'],"","",0,1);
            $existeUsuario = $usuario->existeUsuario();
            $estaActivo = $usuario->estaActivo()->fetch_object();
            
            if($existeUsuario){
                //enviar a la pantalla inicial
                $router->render('juego/inicio_juego');
            }else if($estaActivo->activo === "1"){

            }else{
                echo "<script>alert('el usuario no existe, regístrate')</script>";
                $router->render('auth/login');
            }
        }else{
            $router->render('auth/login');
        }
    }

    public static function iniciarSesion(Router $router){
        echo"INICIANDO SESION...";
    }

    public static function crearCuenta(Router $router){

        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $datos = $_POST;

            $usuario = new Usuario($datos["usuario"],$datos["password"],$datos["email"],$datos["phone"],0,1);
        
            if($usuario->existeUsuario()){
                echo "<script>alert('este usuario ya existe')</script>";
            }else{
                $resultado = $usuario->crearUsuario();
                echo "<script>alert('El usuario ".$usuario->username.", fué creado correctamente')</script>";
            }
            
        }
        //TODO hace falta hashear el password
        $router->render('auth/crear_cuenta',['usuario'=> $usuario, 'alertas'=>$alertas]);
    }



}