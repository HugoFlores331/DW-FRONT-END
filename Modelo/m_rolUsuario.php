<?php
// Incluir archivo de conexión a la base de datos
include '../Controlador/conexion.php';

// Inicializar un array para los roles
$roles = [];

// Realizar la consulta para obtener los roles
$query = "SELECT id_rol, nombre_rol FROM rol_usuario";
$result = $conn->query($query);

// Verificar si se obtuvieron resultados
if ($result && $result->num_rows > 0) {
    // Almacenar los roles en el array
    while ($row = $result->fetch_assoc()) {
        $roles[] = $row;
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Rol de Usuario</title>
</head>
<body>

    <br>
    <form action="m_rolUsuario.php" method="POST">
        <label for="rol">Selecciona un rol:</label>
        <select name="rol" id="rol" required>
            <option value="">-- Selecciona un rol --</option>
            <?php foreach ($roles as $rol): ?>
                <option value="<?php echo $rol['id_rol']; ?>">
                    <?php echo htmlspecialchars($rol['nombre_rol']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>