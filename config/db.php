<?php
//conexion a la base de datos
class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'servicios_interpetesLSM');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}

?>