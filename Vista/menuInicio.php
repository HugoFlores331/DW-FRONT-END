<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="stylesheet" href="css/mv.css">
    </head>
    
    <body>
        <?php 
            require('header.php');
        ?>
            <br>
        <main>
                <section class="hero">
                    <h1>Bienvenido a Supermercado Hero</h1>
                    <p>Tu mejor opción para hacer tus compras diarias.</p>
                    <br>
                    <a href="producto.php" class="btn">Conoce nuestras ofertas</a>
                </section>

                <section class="featured-ads">
                   
                    <div class="ad-grid">
                        <div class="ad-card">
                            <img src="icon/oferta.png" alt="Publicidad 1">
                            <h3>Grandes ahorros esta semana</h3>
                            <p>No te pierdas nuestras promociones semanales.</p>
                        </div>
                        <div class="ad-card">
                            <img src="icon/nuevo.png" alt="Publicidad 2">
                            <h3>Nuevos productos en tienda</h3>
                            <p>Descubre lo último que hemos traído para ti.</p>
                        </div>
                        <div class="ad-card">
                            <img src="icon/envio.png" alt="Publicidad 3">
                            <h3>Envío gratis en compras mayores de Q200 </h3>
                            <p>Lleva tus compras a casa sin costo adicional.</p>
                        </div>
                    </div>
                </section>
        </main>

        <?php 
            require('footer.php');
        ?>
    </body>
</html>