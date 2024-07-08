<?php 

function conectarDB() {
    $service = 'localhost';
    $usuario = 'root';
    $password = '';
    $basededatos = 'message_portafolio';

    $db = new mysqli($service, $usuario, $password, $basededatos);

    // Verificar la conexión
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    return $db;
}
