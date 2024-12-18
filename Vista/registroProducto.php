<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Producto</title>
        <link rel="stylesheet" href="css/registroProducto.css">
    </head>

    <body>
        <?php
            require('header.php');
        ?>

        <br>

        <section>

            <div class="ing-pro">
                <h2>Ingreso de Producto</h2>
            </div>

            <?php
                require('../Modelo/m_tiendas.php');
            ?>

            <!-- <div class="ing-pro">
                <label >Seleccione la tienda</label>
                    <select name="tienda" id="tienda" required>
                        <option value="0">Seleccione la tienda</option>
                    </select>
            </div>
           !-->

            <div class="ing-pro">
                <label>Codigo de barras: </label>
                    <input type="number" name="codigo" id="codigo" placeholder="Ingrese el codigo de barras">
            </div>


            <div class="ing-pro">
                <label>Nombre producto: </label>
                    <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Nombre del producto">
            </div>

            <?php
                require('../Modelo/m_dproducto.php');
            ?>

            <div class="ing-pro">
                <label>Marca del producto: </label>
                    <input type="text" name="marcaProducto" id="marcaProducto" placeholder="Ingrese el nombre de la marca">
            </div>

            <div class="ing-pro">
                <label>Descripcion del contenido: </label>
                    <input type="text" name="cantidadProducto" id="cantidadProducto" placeholder="Ingrese la cantidad que posee el producto">
            </div>

            <div class="ing-pro">
                <label>Precio Minorista: </label>
                    <input type="number" name="precioMayorista" id="precioMayorista" placeholder="Ingrese el precio Minorista">
            </div>

            <div class="ing-pro">
                <label>Precio Mayorista: </label>
                    <input type="text" name="precioMinorista" id="precioMinorista" placeholder="Ingrese el precio Mayorista">
            </div>

            <div class="ing-pro">
                <label>Cantidad de ingreso por unidad: </label>
                    <input type="number" name="existencias" id="existencias" placeholder="Ingrese la cantidad de existecias">
            </div>

            <div class="ing-pro">
                <a href="#">
                    <button>Guardar</button>
                </a>
            </div>
            
        </section>
        <br><br>
        <?php
            require('footer.php');
        ?>
    </body>
</html>