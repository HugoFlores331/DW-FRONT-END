<?php
    $servername = "localhost"; // Cambia esto si es necesario
    $username = "root"; // Usuario de la base de datos
    $password = ""; // Sin contraseña
    $dbname = "proyectofinal"; // Nombre de la base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>