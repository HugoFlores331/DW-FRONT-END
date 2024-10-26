<?php

include '../Controlador/conexion.php'; // Incluir el archivo de conexión

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $email = $_POST['u-correo'] ?? '';
    $password = $_POST['u-password'] ?? '';

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("SELECT `u-password` FROM login WHERE `u-correo` = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si existe el usuario
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña usando ==
        if ($password == $row['u-password']) {
            // Redirigir a la página de usuarios
            header("Location: ../Vista/menuInicio.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "No existe un usuario con ese correo.";
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conn->close();
} else {
    // Método de solicitud no válido
    echo "Método de solicitud no válido.";
}
?>