<?php 

    function conexion() {
        $mysql_conexion = new mysqli("localhost", "agricola", "agricola","bd_agricola");
        
        if($mysql_conexion->connect_errno) {
            echo "Error de conexion con la base de datos: " . $mysql_conexion->connect_errno;
            exit;
        }

        return $mysql_conexion;
    }

?>