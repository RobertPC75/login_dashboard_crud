<?php
 class Conexion{
    public static function Conectar(){
        define('servidor','dashboard-crud-server.mysql.database.azure.com');
        define('nombre_bd','crud_2019');
        define('usuario','pppnkxomil');
        define('password', getenv('MYSQL_PASSWORD'));        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');   
         
         try{
            $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
     
 }
?>