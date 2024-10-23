<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/registroLogin.css">
    </head>

    <body>
        <section>
            <div class="rLogin">
                <h2>Registro Compra en linea</h2>
            </div>

            <div class="rLogin">
                <label>Correo</label>
                <br>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
            </div>

            <div class="rLogin">
                <label>Contraseña</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Ingrese Contraseña">
            </div>

            <div class="rLogin">
                <label>Confirmacion de contraseña</label>
                <br>
                <input type="password" name="v-password" id="v-password" placeholder="Ingrese nuevamente su contraseña">
            </div>

            <div class="rLogin">
                <a href="menuInicio.php">
                    <button type="button">Confirmar</button>
                </a>
            </div>
        </section>
    </body>
</html>