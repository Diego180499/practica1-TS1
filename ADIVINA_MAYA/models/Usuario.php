<?php

namespace Model;

class Usuario extends ActiveRecord{

    protected static $tabla = 'user';
    protected static $columns = ["id","username","password","email","phone","points"];

    public $id;
    public $username;
    public $password;
    public $email;
    public $phone;
    public $points;
    public $activo;


    public function __construct($username, $password, $email, $phone, $points,$activo)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->phone = $phone;
        $this->points = $points;
        $this->activo = $activo;
    }


    //acciones db
    public function crearUsuario(){
        $initQuery = "INSERT INTO user (username,password,email,phone,points,activo) VALUES ('";
        $queryCreateUser = $initQuery.$this->username."','".$this->password."','".$this->email."','".$this->phone."',".$this->points.",1);";
        $resultado = self::$db->query($queryCreateUser);
        return $resultado;
    }

    public function existeUsuario(){
        $query = "SELECT * FROM user WHERE username = '".$this->username."' AND password = '".$this->password."';";
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
            return true;
        }
        return false;
    }

    public function estaActivo(){
        $query = "SELECT activo FROM user WHERE username = '".$this->username."' AND password = '".$this->password."';";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function eliminarUsuario(){
        $query = "UPDATE user SET activo = 0 WHERE username = ".$this->username." ;";
        $resultado = self::$db->query($query);
    }

    public function usuarios(){
        $query = "SELECT * FROM user;";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    //hashear password
    public function hashPassword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    //metodos estaticos

    public static function obtenerUsuarios(){
        $query = "SELECT * FROM user WHERE activo = 1;";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public static function eliminarUsuarioV2($id){
        $query = "UPDATE user SET activo = 0 WHERE id = '".$id."' ;";
        self::$db->query($query);
    }
}