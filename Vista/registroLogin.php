<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="css/registroLogin.css">
    </head>
    <body>
        <section>
            <div class="rLogin">
                <h2>Registro Compra en Línea</h2>
            </div>

            <form action="../Modelo/m_registroUsuario.php" method="POST">
                <input type="email" name="u-correo" id="correo" placeholder="Ingrese su correo electrónico" required>
                <input type="password" name="u-password" id="password" placeholder="Ingrese Contraseña" required>
                <input type="password" name="v-password" id="v-password" placeholder="Ingrese nuevamente su contraseña" required>
                <button type="submit" name="registrar">Confirmar</button>
            </form>
        </section>
    </body>
</html>