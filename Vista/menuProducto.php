<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu producto</title>
        <link rel="stylesheet" href="css/menuProducto.css">
    </head>
    <body>

        <?php
            require('header.php');
        ?>
        
        <h2>Menu Productos</h2>

        <section>
            <a href="registroProducto.php">
                <div class="m-producto">
                    <p>Registro de Producto</p>
                    <img src="icon/agregar-producto.png">
                </div>
             </a>

             <a href="registroDepartamento.php">
                <div class="m-producto">
                    <p>Registro Departamento de producto</p>
                    <img src="icon/agregar-depProducto.png">
                </div>
            </a>

            <a href="#">
                <div class="m-producto">
                        <p>Vista productos</p>
                        <img src="icon/vista-producto.png">
                </div>
            </a>

            <a href="listadoProductos.php">
                
                <div class="m-producto">
                        <p>Listado de productos</p>
                        <img src="icon/listado-producto.png">
                </div>
            </a>

            <a href="listadoDepartamento.php">
                <div class="m-producto">
                        <p>Listado de departamentos</p>
                        <img src="icon/dep-prod.png">
                </div>
            </a>

        </section>
    </body>
</html>