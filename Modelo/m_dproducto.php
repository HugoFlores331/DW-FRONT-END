<?php

include '../Controlador/conexion.php';


$productos = [];


$query = "SELECT id, nombre FROM dproducto";
$result = $conn->query($query);


if ($result && $result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Producto</title>
</head>
<body>

    <div class="ing-pro">
        <label for="tipoDepartamento">Tipo departamento del producto</label>
        <select name="tipoDepartamento" id="tipoDepartamento" required>
            <option value="0">Departamento del producto</option>
            <?php foreach ($productos as $producto): ?>
                <option value="<?php echo $producto['id']; ?>">
                    <?php echo htmlspecialchars($producto['nombre']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

</body>
</html>