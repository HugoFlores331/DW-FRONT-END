<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Rastreo de Paquete</title>
        <link rel="stylesheet" href="css/rastreo.css">        
    </head>

    <body>

        <?php
           require('header.php');
        ?>

        <br>
        <br><br><br><br>

        <div class="container">
        <h1>Rastreo de Paquete</h1>
        <form id="trackingForm">
            <label for="trackingNumber">Número de Seguimiento:</label>
            <input type="text" id="trackingNumber" name="trackingNumber" required>
            <input type="submit" value="Rastrear">
        </form>
        <div class="result" id="result" style="display: none;"></div>

        <script src="js/rastreo.js"></script>
    </div>
    <br><br><br>
    <?php
            require('footer.php');
        ?>

</html>