<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section>
        <form action="../Modelo/m_login.php" method="POST">
            <div class="cont">
                <h2>Inicio de sesión</h2>
            </div>

            <div class="cont">
                <img src="icon/logo.png" width="60">
            </div>

            <div class="cont">
                <input type="email" name="u-correo" id="u-correo" placeholder="Correo electrónico" required>
            </div>

            <div class="cont">
                <input type="password" name="u-password" id="u-password" placeholder="Contraseña" required>
            </div>

            <div class="cont">
                 <button type="submit" name="u-ingresar">Ingresar</button>
            </div>

            <div class="cont">
                <a href="registroLogin.php">Registrarme</a>
            </div>
        </form>
    </section>
</body>
</html>