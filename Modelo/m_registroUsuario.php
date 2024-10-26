<?php

include '../Controlador/conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST['u-correo'];
    $password = $_POST['u-password'];
    $v_password = $_POST['v-password'];

 
    if ($password !== $v_password) {
        die("Las contraseñas no coinciden.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO login (u-corre, u-password, id_rol) VALUES (?, ?, ?)");
    $id_rol = 1; 
    $stmt->bind_param("ssi", $correo, $hashed_password, $id_rol);


    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }


    $stmt->close();
}

$conn->close();
?>