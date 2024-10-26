<?php
// Incluir archivo de conexión a la base de datos
include '../Controlador/conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST['u-correo'];
    $password = $_POST['u-password'];
    $v_password = $_POST['v-password'];

    // Validar que las contraseñas coincidan
    if ($password !== $v_password) {
        die("Las contraseñas no coinciden.");
    }

    // Hashear la contraseña antes de almacenarla
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta para insertar un nuevo usuario
    $stmt = $conn->prepare("INSERT INTO login (u-corre, u-password, id_rol) VALUES (?, ?, ?)");
    $id_rol = 1; // Asignar el id_rol 1
    $stmt->bind_param("ssi", $correo, $hashed_password, $id_rol);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>