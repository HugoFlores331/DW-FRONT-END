<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Departamento</title>
    <link rel="stylesheet" href="css/listadoDepartamentos.css">
</head>

<body>

    <?php
        require('header.php');

        // Incluir archivo de conexión a la base de datos
        include '../Controlador/conexion.php';

        // Realizar la consulta para obtener los departamentos
        $query = "SELECT nombre FROM dproducto"; // Solo seleccionamos el nombre
        $result = $conn->query($query);
    ?>

    <h3>Listado departamentos de productos</h3>
    
    <section>
        <table>
            <tr>
                <th>Departamento de productos</th>
            </tr>

            <?php
            // Verificar si se obtuvieron resultados
            if ($result && $result->num_rows > 0) {
                // Recorrer los resultados y generar las filas de la tabla
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td>No hay departamentos disponibles.</td></tr>';
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </table>
    </section>

    <br><br>

    <?php
        require('footer.php');
    ?>
</body>
</html>