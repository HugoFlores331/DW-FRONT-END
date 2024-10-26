<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de tiendas</title>
        <link rel="stylesheet" href="css/listadoTiendas.css">
    </head>

    <body>

        <?php
           require('header.php');
                
           require('../Modelo/m_rolUsuario.php');
        ?>

        <section>

            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Departamento</th>
                    <th>Direccion</th>
                    <th>Correo Electronico</th>
                    <th>Tipo de usario</th>
                </tr>

                <tr>
                    <td>Hugo Alejandro</td>
                    <td>Flores Morales</td>
                    <td>52730611</td>
                    <td>Sacatepequez</td>
                    <td>Antigua Guatemala</td>
                    <td>hfloresm@gmail.com</td>
                    <td>Administrador</td>
                </tr>


            </table>
        </section>    
        <br><br><br><br><br><br><br><br><br><br><br>
        <?php
            require('footer.php');
        ?>
    </body>
</html>