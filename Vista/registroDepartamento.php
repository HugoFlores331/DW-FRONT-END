<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Departamento</title>
    <link rel="stylesheet" href="css/rDepartamentos.css" />
</head>
<body>

    <?php
        require('header.php');

        // Incluir archivo de conexión a la base de datos
        include '../Controlador/conexion.php';

        // Manejar el envío del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
            $nombreDepartamento = $_POST['nombre'];

            // Preparar la consulta para insertar un nuevo departamento
            $stmt = $conn->prepare("INSERT INTO dproducto (nombre) VALUES (?)");
            $stmt->bind_param("s", $nombreDepartamento);

            if ($stmt->execute()) {
                echo "<p>Departamento creado exitosamente.</p>";
            } else {
                echo "<p>Error al crear el departamento: " . $conn->error . "</p>";
            }

            // Cerrar la declaración
            $stmt->close();
        }

        // Cerrar la conexión
        $conn->close();
    ?>

    <br>

    <div class="container">
        <h1>Registro Departamento</h1>
        
        <form action="" method="POST">
            <label for="nombre">Nombre Departamento:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese departamento" required />
            
            <button type="submit">Crear Departamento</button>
        </form>
        
        <h2>Lista de Departamentos</h2>
       
        <a href="listadoDepartamento.php">
            <button>Ver Departamentos</button>
        </a>

    </div>

    <br><br>
    <?php
        require('footer.php');
    ?>
</body>
</html>
