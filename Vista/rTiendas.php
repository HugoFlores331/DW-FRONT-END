<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Tienda</title>
    <link rel="stylesheet" href="css/rTiendas.css" /> 
</head>

<body>

    <?php
        require('header.php');
    ?>

    <div class="container">
        <h1>Registro de Tienda</h1>

        <form >
            <label for="tipo_tienda">Tipo de Tienda:</label>
            <select id="tipo_tienda" name="tipo_tienda" required="true">
                <option value="0">Selecione el tipo de tienda</option>
                <option value="fisica">Física</option>
                <option value="virtual">Virtual</option>
            </select>
            
            <label for="departamento">Departamento:</label>
            <select id="departamento" name="departamento" required>
                <option value="">Seleccione un departamento</option>
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

            <label for="nombre">Municipio:</label>
                <input type="text" id="municipio" name="municipio" placeholder="Ingrese municipio"/>
    
            <label for="nombre">Direccion:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese direccion"/>
    
            <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" placeholder="Ingrese numero de telefono">
    
            <h3>Horario entre semena</h3>

            <label for="dias">Dias habiles:</label>
                <select id="diaInicio" name="diaInicio" required>
                    <option value="0">Seleccione los dias de apertura</option>
                    <option value="1">Lunes a Viernes</option>
                </select>

                <label for="dinicio">Apertura de tienda</label>
                    <select id="diaInicio" name="hora" required> 
                        <option value="0">Seleccione hora de inicio</option>
                        <option value="1">6:00 AM</option>
                        <option value="2">7:00 AM</option>
                        <option value="3">8:00 AM</option>
                        <option value="4">9:00 AM</option>
                        <option value="5">10:00 AM</option>
                    </select> 
                    
                <label for="dinicio">Cierre de tienda</label>
                    <select id="diaInicio" name="hora" required>
                        <option value="0">Seleccione hora de finalizacion</option>
                        <option value="1">4:00 P.M</option>
                        <option value="2">5:00 P.M</option>
                        <option value="3">6:00 P.M</option>
                        <option value="4">7:00 P.M</option>
                        <option value="5">8:00 P.M</option>
                        <option value="5">9:00 P.M</option>
                    </select> 
    
            <h3>Horario fin de semana</h3>

                <label for="dias">Dias habiles:</label>
                    <select id="diaInicio" name="diaInicio" required>
                        <option value="0">Seleccione los dias de apertura</option>
                        <option value="1">Sabado y Domingo</option>
                        <option value="1">Sabado</option>
                        <option value="1">Domingo</option>
                    </select>

                <label for="dinicio">Apertura de tienda</label>
                    <select id="diaInicio" name="dia" required>
                        <option value="0">Seleccione hora de inicio</option>
                        <option value="1">6:00 AM</option>
                        <option value="2">7:00 AM</option>
                        <option value="3">8:00 AM</option>
                        <option value="4">9:00 AM</option>
                        <option value="5">10:00 AM</option>
                        <option value="6">11:00 AM</option>
                    </select> 
                    
                <label for="dinicio">Cierre de tienda</label>
                    <select id="diaInicio" name="hora" required>
                        <option value="0">Seleccione hora de finalizacion</option>
                        <option value="1">12:00 P.M</option>
                        <option value="2">1:00 P.M</option>
                        <option value="3">2:00 P.M</option>
                        <option value="4">3:00 P.M</option>
                        <option value="5">4:00 P.M</option>
                        <option value="6">5:00 P.M</option>
                        <option value="7">6:00 P.M</option>
                        <option value="8">7:00 P.M</option>
                        <option value="9">8:00 P.M</option>
                        <option value="10">9:00 P.M</option>
                    </select> 

            <h3>Horario dias festivos</h3>
                <label for="dinicio">Apertura de tienda</label>
                    <select id="diaInicio" name="dia" required>
                        <option value="0">Seleccione hora de inicio</option>
                        <option value="no">------</option>
                        <option value="1">6:00 AM</option>
                        <option value="2">7:00 AM</option>
                        <option value="3">8:00 AM</option>
                        <option value="4">9:00 AM</option>
                        <option value="5">10:00 AM</option>
                        <option value="6">11:00 AM</option>
                    </select> 
                    
                <label for="dinicio">Cierre de tienda</label>
                    <select id="diaInicio" name="hora" required>
                        <option value="0">Seleccione hora de finalizacion</option>
                        <option value="no">------</option>
                        <option value="1">12:00 P.M</option>
                        <option value="2">1:00 P.M</option>
                        <option value="3">2:00 P.M</option>
                        <option value="4">3:00 P.M</option>
                        <option value="5">4:00 P.M</option>
                        <option value="6">5:00 P.M</option>
                        <option value="7">6:00 P.M</option>
                        <option value="8">7:00 P.M</option>
                        <option value="9">8:00 P.M</option>
                        <option value="10">9:00 P.M</option>
                    </select> 
                 
            <input type="submit" value="Crear Tienda">
        </form>
        
        <h2>Lista de Tiendas</h2>
            <button onclick="location.href='listadoTiendas.php'">Ver Tiendas</button>
    
    </div>    
</body>
</html>
