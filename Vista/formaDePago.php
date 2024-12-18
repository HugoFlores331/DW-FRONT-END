<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="css/formaDePago.css"> <!-- Enlazado con el archivo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome para los íconos -->
</head>
<body>

<?php
    require('header.php');
?>

<div class="form-container">
    <h2>Tus detalles</h2>
    <form>
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
        

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su numero de telefono" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Ingrese su correo electronico">

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" placeholder="Ingrese su direccion">

        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento" required>
            <option value="0"></option>
            <option value="guatemala">Guatemala</option>
            <option value="alta_verapaz">Alta Verapaz</option>
            <option value="baja_verapaz">Baja Verapaz</option>
            <option value="chimaltenango">Chimaltenango</option>
            <option value="chiquimula">Chiquimula</option>
            <option value="el_progreso">El Progreso</option>
            <option value="escuintla">Escuintla</option>
            <option value="guatemala">Guatemala</option>
            <option value="huehuetenango">Huehuetenango</option>
            <option value="izabal">Izabal</option>
            <option value="jalapa">Jalapa</option>
            <option value="jutiapa">Jutiapa</option>
            <option value="peten">Petén</option>
            <option value="quetzaltenango">Quetzaltenango</option>
            <option value="quiché">Quiché</option>
            <option value="retalhuleu">Retalhuleu</option>
            <option value="sacatepequez">Sacatepéquez</option>
            <option value="san_marcos">San Marcos</option>
            <option value="santa_rosa">Santa Rosa</option>
            <option value="solola">Sololá</option>
            <option value="suchitepequez">Suchitepéquez</option>
            <option value="totonicapan">Totonicapán</option>
            <option value="zacapa">Zacapa</option>

            <!-- Add more options as necessary -->
        </select>

        <label for="facturacion">Nombre para facturación:</label>
        <input type="text" id="facturacion" name="facturacion" placeholder="Nombre de la persona de la factura">

        <label for="nit">NIT (Sin Guion):</label>
        <input type="text" id="nit" name="nit" placeholder="Ingres el numero de nit">

    </form>

</div>

    <div class="form-container">
        <h2>Tipos De Pago</h2>
        <form id="paymentForm">
            <!-- Tipo de Pago -->
            <div class="form-group">
                <label for="paymentType">
                    <i class="fas fa-credit-card"></i> Tipo de Pago:
                </label>
                <select id="paymentType" name="paymentType" required>
                    <option value="">Seleccione una opción</option>
                    <option value="credito">Tarjeta de Crédito</option>
                    <option value="debito">Tarjeta de Débito</option>
                    <option value="contraEntrega">Contra Entrega</option>
                    <option value="tienda">Recoger en Tienda</option>
                </select>
            </div>

            <!-- Número de cuotas -->
            <div id="cuotasDiv" class="form-group hidden">
                <label for="cuotas">
                    <i class="fas fa-money-bill-wave"></i> Número de Cuotas:
                </label>
                <select id="cuotas" name="cuotas">
                    <option value="">Seleccione el número de cuotas</option>
                    <option value="2 Meses">2 Meses</option>
                    <option value="4 Meses">4 Meses</option>
                    <option value="6 Meses">6 Meses</option>
                    <option value="8 Meses">8 Meses</option>
                    <option value="10 Meses">10 Meses</option>
                    <option value="12 Meses">12 Meses</option>
                    <option value="14 Meses">14 Meses</option>
                    <option value="16 Meses">16 Meses</option>
                    <option value="18 Meses">18 Meses</option>
                    <option value="20 Meses">20 Meses</option>
                    <option value="24 Meses">24 Meses</option>
                </select>
            </div>

            <!-- Datos para Contra Entrega -->
            <div id="contraEntregaDiv" class="form-group hidden">
                <h3 class="form-title">
                    <i class="fas fa-truck"></i> Datos para Contra Entrega
                </h3>
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" placeholder="Ingrese su nombre">
                <label for="phone">Teléfono:</label>
                <input type="tel" id="phone" name="phone" placeholder="Ingrese su teléfono">
                <label for="address">Dirección de Entrega:</label>
                <input type="text" id="address" name="address" placeholder="Ingrese la dirección de entrega">
            </div>

            <!-- Opciones de Recogida en Tienda -->
            <div id="tiendaDiv" class="form-group hidden">
                <h3 class="form-title">
                    <i class="fas fa-store"></i> Recoger en Tienda
                </h3>
                <label for="tienda">Seleccione la Tienda:</label>
                <select id="tienda" name="tienda">
                    <option value="">Seleccione una tienda</option>
                    <option value="tienda1">Tienda 1 - Dirección 1</option>
                    <option value="tienda2">Tienda 2 - Dirección 2</option>
                    <option value="tienda3">Tienda 3 - Dirección 3</option>
                </select>
                <label for="customAddress">Ingrese una dirección:</label>
                <input type="text" id="customAddress" name="customAddress" placeholder="Ingrese su dirección">
            </div>

            <a href="rastreo.php">
                <button>Proceder</button>
            </a>
        </form>
    </div>

    <br>
    <br>
    <br>

    <?php
            require('footer.php');
        ?>

    <script src="js/formaDePago.js"></script> <!-- Enlazado con el archivo JavaScript -->
</body>
</html>
