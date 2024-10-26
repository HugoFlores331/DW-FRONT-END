<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carrito de Compras</title>
        <link rel="stylesheet" href="css/carrito.css">
    </head>

    <body>

        <?php
            require('header.php');
        ?>
        
        <h3>Carrito de Compras</h3>

        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Camisola</td>
                    <td>Q220.00</td>
                    <td>1</td>
                    <td>Q220.00</td>
                </tr>
                <tr>
                    <td>Vanish</td>
                    <td>Q30.00</td>
                    <td>1</td>
                    <td>Q30.00</td>
                </tr>
                <tr>
                    <td>Cocacola</td>
                    <td>Q22.00</td>
                    <td>1</td>
                    <td>Q22.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="total">Total</td>
                    <td class="total">Q272.00</td>
                </tr>
            </tfoot>
        </table>

        <a href="formaDePago.php">
            <button>
                Pagar
            </button>
        </a>

        <br><br>

        <?php
            require('footer.php');
        ?>

    </body>
</html>