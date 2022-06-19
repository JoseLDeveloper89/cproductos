<?php
function conect()
{
    //Declarar y asiganar valores a las variables
    $conexion = null;
    $nom_servidor = "localhost";
    $username = "root";
    $password = "";

    try{
        //Realizar la conexion con la base de datos
        $conexion = new PDO("mysql:host=$nom_servidor;dbname=sistem_fares; charset=UTF8", $username, $password, 
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ));
       return $conexion;
    }catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}