<?php

include '../Controlador/conexion.php';


$tiendas = [];


$query = "SELECT id_tienda, nombre FROM tienda";
$result = $conn->query($query);


if ($result && $result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $tiendas[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Tienda</title>
</head>
<body>

    <br>
    <form action="m_tienda.php" method="POST">
        <label for="tienda">Selecciona una tienda:</label>
        <select name="tienda" id="tienda" required>
            <option value="">Selecciona una tienda</option>
            <?php foreach ($tiendas as $tienda): ?>
                <option value="<?php echo $tienda['id_tienda']; ?>">
                    <?php echo htmlspecialchars($tienda['nombre']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</body>
</html>

