<?php
// Incluir el archivo de conexión a la base de datos
include '../Controlador/conexion.php';

// Función para registrar un nuevo usuario
function registrarUsuario($conn, $email, $password, $id_rol = 1) {
    // Verificar que las contraseñas coincidan
    if ($_POST['u-password'] !== $_POST['v-password']) {
        return "Las contraseñas no coinciden.";
    }

    // Hashear la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO login (u-correo, u-password, id_rol) VALUES (?, ?, ?)");
    
    if (!$stmt) {
        return "Error al preparar la consulta: " . $conn->error;
    }

    // Vincular parámetros
    $stmt->bind_param("ssi", $email, $hashedPassword, $id_rol);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $lastInsertedId = $conn->insert_id; // Obtener el último ID insertado
        $stmt->close(); // Cerrar la declaración
        return "Registro creado exitosamente. ID: " . $lastInsertedId;
    } else {
        return "Error al crear el registro: " . $stmt->error;
    }
}

// Manejar la creación de un nuevo registro
if (isset($_POST['registrar'])) {
    $email = $_POST['u-correo'];
    $password = $_POST['u-password'];
    
    // Llamar a la función para registrar el usuario
    $resultado = registrarUsuario($conn, $email, $password);
    echo $resultado; // Mostrar el resultado
}

// Cerrar la conexión
$conn->close();
?>