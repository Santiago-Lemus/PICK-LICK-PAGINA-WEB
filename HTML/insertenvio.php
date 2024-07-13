<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
    <script defer src="../JS/nav_responsive.js"></script>
    <title>PICK & LICK STORE | Tienda de instrumentos de cuerda</title>
</head>
<body>
    <div id="container">
        <header id="header">
            <a href="../index.php"><img src="../IMG/Captura de pantalla 2023-03-20 100951.jpg" alt="Logotipo Web" id="logo"></a>
        </header>
    <div id="cliente-container">
        <section id="contentcliente">
            <div id="cliente-loguitos">
                <div class="loguito-mini">
                    <p><i class="fa-regular fa-user"></i></p>
                    <h3>FACTURACIÓN</h3>
                </div>
                <div class="line-cliente"></div>
                <div class="loguito-mini">
                    <p id="actual_logo"><i class="fa-regular fa-paper-plane"></i></p>
                    <h3 id="actual">ENVIO</h3>
                </div>
                <div class="line-cliente"></div>
                <div class="loguito-mini">
                    <p><i class="fa-regular fa-square-check"></i></p>
                    <h3>CONFIRMACIÓN</h3>
                </div>
            </div>
                    <form action="../PHP/registerenvio.php" method="POST" id="register-cliente">
                            <div class="registercliente-block">
                                <p class="cliente-inp">
                                    <label>Ciudad</label>
                                    <input type="text" name="ciudad">
                                </p>
                                <p class="cliente-inp">
                                    <label>Dirección</label>
                                    <input type="text" name="direccion">
                                </p>
                                <div id="cliente-tipodoc">
                                    <label style="font-weight: bold;">Tipo de envio</label>
                                    <div class="genre-botton"><input type="radio" name="tipoenv" value="estandar">Estandar</div>
                                    <div class="genre-botton"><input type="radio" name="tipoenv" value="flash">Flash</div>
                                </div>
                                <p class="cliente-inp">
                                    <label>Código postal</label>
                                    <input type="text" name="codigo">
                                </p>
                                <p class="cliente-inp">
                                    <label>Anotaciones</label>
                                    <input type="text" name="anotacion">
                                </p>
                            </div>
                        <div id="cliente-bottons">
                            <input type="reset" value="BORRAR" id="cliente-reset">
                            <input type="submit" value="CONTINUAR" id="cliente-submit">
                        </div>
                    </form>
        </section>
        <section id="cliente_total">
            <h1>RESUMEN DE COMPRA</h1>
            <?php
                include '../PHP/cliente_productos.php'
            ?>
        </section>
    </div>
</div>
    
</body>
</html>