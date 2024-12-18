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
        ?>

        <br>

        <section>
            <select id="departamento" name="departamento" required>
                <option value="">Departamento</option>
                <option value="alta_verapaz">Alta Verapaz</option>
                <option value="baja_verapaz">Baja Verapaz</option>
                <option value="chimaltenango">Chimaltenango</option>
                <option value="chuapas">Chiquimula</option>
                <option value="cobán">Coban</option>
                <option value="esquintla">Escuintla</option>
                <option value="guatemala">Guatemala</option>
                <option value="huehuetenango">Huehuetenango</option>
                <option value="izabal">Izabal</option>
                <option value="jalapa">Jalapa</option>
                <option value="jutiapa">Jutiapa</option>
                <option value="peten">Peten</option>
                <option value="quiche">Quiché</option>
                <option value="retalhuleu">Retalhuleu</option>
                <option value="san_marcos">San Marcos</option>
                <option value="santa_rosa">Santa Rosa</option>
                <option value="solala">Solalá</option>
                <option value="totonicapan">Totonicapán</option>
                <option value="zaqueques">Zacapa</option>
            </select>
        

            <select name="tienda" id="tienda">
                <option value="0">Tipo de tienda</option>
                <option value="1">Fisica  y Virtual</option>
                <option value="2">Virtual</option>
                <option value="3">Fisica</option>
            </select>

            <button>Aplicar</button>

        <section>

            <table>
                <tr>
                    <th>Tipo de tienda</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Direccion</th>
                    <th>Dias entre semana</th>
                    <th>Horario entre semana</th>
                    <th>Dias fin de semana</th>
                    <th>Horario fin de semana</th>
                    <th>Dias festivos</th>
                    <th>Horario dias festivos</th>
                </tr>

                <tr>
                    <td>Fisica</td>
                    <td>Sacatepequez</td>
                    <td>Antigua</td>
                    <td>Parque Central</td>
                    <td>Lunes a viernes</td>
                    <td>8:00 a.m a 9:00 p.m </td>
                    <td>Sabado y domingo</td>
                    <td>8:00 a.m a 12:00 p.m </td>
                    <td>----------</td>
                    <td>8:00 a.m a 12:00 p.m </td>
                </tr>


            </table>
            
        </section>  
        <br><br><br><br><br><br><br><br><br>
        <?php
            require('footer.php');
        ?>
    </body>
</html>