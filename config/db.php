<?php

//Funcion que devuelve la conexion a la base de datos

class database{
    public static function connect(){
        $db = new mysqli('213.190.6.179','u558315427_ingenieria','Iw2519020','u558315427_ingenieria');
        $db->query("SET NAMES 'utf8' ");
        return $db;
    }
}
?>