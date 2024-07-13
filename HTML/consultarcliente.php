<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../PICK & LICK - PÁGINA WEB/CSS/carshoping.css">
    <link rel="stylesheet" href="../../PICK & LICK - PÁGINA WEB/CSS/stylesheet.css">
    <title>PICK & LICK STORE | Tienda de instrumentos de cuerda</title>
</head>
<body>
    <section id="login-content">
        <div class="login-container">
            <h2>Consulta los clientes registrados con tu ID</h2>
            <form action="../PHP/consultacliente.php" method="POST">
                <p class="login-inp">
                    <label for="username">NOMBRE</label>
                    <input type="text" name="nomcliente" id="username" placeholder="Nombre del cliente a consultar">
                </p>
                <div id="register-bottons">
                    <input type="submit" value="CONSULTAR" id="register-submit">
                    <input type="reset" value="BORRAR" id="register-reset">
                </div>
            </form>
        </div>
    </section>
</body>
</html>