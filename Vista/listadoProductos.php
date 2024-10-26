<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado productos</title>
        <link rel="stylesheet" href="css/listadoProductos.css">
    </head>

    <body>

        <?php
            require('header.php');
        ?>

        <br>


        <select name="tienda" id="tienda">
            <option value="0">Tienda</option>
        </select>

        <select name="b-dProducto" id="b-dProducto">
            <option value="0">Departamento del producto</option>
        </select>

        <section>
            <table>
                <tr>
                    <th>Codigo de Barras</th>
                    <th>Departamento</th>
                    <th>Nombre del producto</th>
                    <th>Marca</th>
                    <th>Contenido</th>
                    <th>Precio Minorista</th>
                    <th>Precio Mayorista</th>
                    <th>Cantidad Ingresadas</th>
                    <th>Ventas</th>
                    <th>Existencias</th>
                </tr>

                <tr>
                    <td>4728391056</td>
                    <td>Golozinas</td>
                    <td>Coca Cola</td>
                    <td>Coca Cola</td>
                    <td>3 Litros</td>
                    <td>Q 22.00</td>
                    <td>Q.20.00 </td>
                    <td>100</td>
                    <td>20</td>
                    <td>80</td>
                </tr>

            </table>
        </section>

        <br><br><br><br><br><br><br><br><br>
        <?php
            require('footer.php');
        ?>
    </body>
</html>