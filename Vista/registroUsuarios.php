<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de usuario</title>
        <link rel="stylesheet" href="css/registroUsuarios.css">
    </head>

    <body>

        <?php
            require('header.php');
        ?>

        <section>
            <div class="usuario">
                <h2>Regitro de informacion Personal</h2>
            </div>

            <div class="usuario">
                <label>Nombre</label>
                    </br>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre completo">
            </div>

            <div class="usuario">
                <label>Apellidos</label>
            </br>
                <input type="text" name="apellido" id="apellido" placeholder="Ingrese sus Apellidos">
            </br>
            </div>

            <div class="usuario">
                <label>Telefono</label>
            </br>
                <input type="tel" name="telefono" id="telefono" placeholder="Ingrese su numero de telefono">
            </div>

            <div class="usuario">
                <!--Departamento-->
            </div>

            <div class="usuario">
                <label>Direccion</label>
            </br>
                <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
            </div>

 
            <div class="usuario">
                <a href="registroLogin.php">
                    <button type="button">Siguiente</button>
                </a>
            </div>

        </section>
    </body>
</html>