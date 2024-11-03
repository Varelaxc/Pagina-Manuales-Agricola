<?php
include "conexion.php";

function insertar($data)
{

    $respuesta = "errore";

    $conexion = conexion();

    $nombre     = $data["nombre"];
    $apellido   = $data["apellido"];
    $email      = $data["email"];
    $cuenta     = $data["cuenta"];
    $carrera    = $data["carrera"];

    $ssql = "insert into registros (nombre, apellido, email, cuenta, carrera) values ('$nombre', '$apellido', '$email', '$cuenta', '$carrera')";

    if ($conexion->query($ssql)) {
        $respuesta = "okidoki";
    }

    $conexion->close();

    return $respuesta;
}

$peticionAjax = file_get_contents("php://input");
$post = json_decode($peticionAjax, true);
$respuestaG = insertar($post); 
header('Content-Type: application/json');
echo '{"status":"' . $respuestaG . '"}';