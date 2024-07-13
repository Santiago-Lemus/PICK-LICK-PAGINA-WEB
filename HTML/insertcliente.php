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
                    <p id="actual_logo"><i class="fa-regular fa-user"></i></p>
                    <h3 id="actual">FACTURACIÓN</h3>
                </div>
                <div class="line-cliente"></div>
                <div class="loguito-mini">
                    <p><i class="fa-regular fa-paper-plane"></i></p>
                    <h3>ENVIO</h3>
                </div>
                <div class="line-cliente"></div>
                <div class="loguito-mini">
                    <p><i class="fa-regular fa-square-check"></i></p>
                    <h3>CONFIRMACIÓN</h3>
                </div>
            </div>
                    <form action="../PHP/registercliente.php" method="POST" id="register-cliente">
                            <div class="registercliente-block">
                                <p class="cliente-inp">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre">
                                </p>
                                <p class="cliente-inp">
                                    <label>Apellido</label>
                                    <input type="text" name="apellido">
                                </p>
                                <div id="cliente-tipodoc">
                                    <label style="font-weight: bold;">Tipo de documento</label>
                                        <div class="genre-botton"><input type="radio" name="tipodoc" value="cedula_ciudadania">Cedula de ciudadanía</div>
                                        <div class="genre-botton"><input type="radio" name="tipodoc" value="nit">NIT</div>
                                        <div class="genre-botton"><input type="radio" name="tipodoc" value="cedula_extranjeria">Cédula de extranjería</div>
                                        <div class="genre-botton"><input type="radio" name="tipodoc" value="pasaporte">Pasaporte</div>
                                </div>
                                <p class="cliente-inp">
                                    <label>Número de documento</label>
                                    <input type="text" name="numdoc">
                                </p>
                                <p class="cliente-inp">
                                    <label>Email</label>
                                    <input type="text" name="email">
                                </p>
                                <p class="cliente-inp">
                                    <label>Dirección</label>
                                    <input type="text" name="direccion">
                                </p>
                                <p class="cliente-inp"> 
                                    <label>Teléfono</label>
                                    <input type="text" name="telefono">
                                </p>
                                <p class="cliente-inp">
                                    <label>Ciudad</label>
                                    <input type="text" name="ciudad">
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