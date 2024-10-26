<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu tienda</title>
        <link rel="stylesheet" href="css/menuUsuarios.css">
    </head>

    <body>

        <?php
            require('header.php');
        ?>

        <h2>Menu usuario</h2>
        
       <section>
            
            <a href="registroUsuarios.php">
                <div class="m-tienda">
                    <p>Crear usuario</p>
                    <img src="icon/nuevo-usuario.png">
                </div>
            </a>

            <a href="listadoUsuario.php">
                <div class="m-tienda">
                    <p>Ver usuario</p>
                    <img src="icon/ver-usuarios.png">
                </div>
            </a>

       </section> 
        <br>
        <br>
        <br>
       <?php
            require('footer.php');
        ?>
    </body>
</html>