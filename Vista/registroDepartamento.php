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
    ?>

    <br>

    <div class="container">
        <h1>Registro Departamento</h1>
        
        <form action="#" method="POST">
            <label for="nombre">Nombre Departamento:</label>
            <input type="text" id="nombre" name="nombre"
              placeholder="Ingrese departamento"/>
            
            <button>Crear Departamentos</button>
        </form>
        
        <h2>Lista de Tiendas</h2>
       
        <a href="listadoDepartamento.php">
            <button>Ver Departamento</button>
        </a>

    </div>
</body>
</html>
