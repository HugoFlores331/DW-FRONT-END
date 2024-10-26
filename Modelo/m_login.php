<?php

include '../Controlador/conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST['u-correo'] ?? '';
    $password = $_POST['u-password'] ?? '';

   
    $stmt = $conn->prepare("SELECT `u-password` FROM login WHERE `u-correo` = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        
        if ($password == $row['u-password']) {
         
            header("Location: ../Vista/menuInicio.php");
            exit();
        } else {
           
            echo "Contraseña incorrecta.";
        }
    } else {
        
        echo "No existe un usuario con ese correo.";
    }

    
    $stmt->close();
    $conn->close();
} else {
   
    echo "Método de solicitud no válido.";
}
?>