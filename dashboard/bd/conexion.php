<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor','dashboard-crud-server.mysql.database.azure.com');
        define('nombre_bd','dashboard-crud-database');
        define('usuario','pppnkxomil');
        define('password','Robert75rpc!'); 			        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}