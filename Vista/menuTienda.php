<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu tienda</title>
        <link rel="stylesheet" href="css/menuTienda.css">
    </head>

    <body>

    <?php
        require('header.php');
    ?>

        <h2>Menu tienda</h2>
        
       <section>
            
            <div class="m-tienda">
                <a href="rTiendas.php">
                    <p>Crear Tienda</p>
                    <img src="icon/+tienda.png">
                </a>
            </div>

            <div class="m-tienda">
                <a href="listadoTiendas.php">
                    <p>Listado tienda</p>
                    <img src="icon/tienda.png">
                </a>
            </div>
       </section> 
    </body>
</html>