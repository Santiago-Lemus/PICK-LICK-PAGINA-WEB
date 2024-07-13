<?php
session_start();
if(isset($_SESSION['usr_user'])){
    header("location: ../HTML/bienvenido.php");
}
?>
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
            <h2>¡Bienvenido!</h2>
            <p id="login-mess">Selecciona método de autenticación</p>
            <form action="../PHP/login-user.php" method="POST">
                <p class="login-inp">
                    <label for="username">Correo electrónico</label>
                    <input type="text" name="correo" id="username">
                </p>
                <p class="login-inp">
                    <label for="password">Contraseña</label>
                    <input type="password" name="contraseña" id="password">
                </p>
                <div class="login-options">
                        <p>Recordarme <input type="checkbox" name="rememberme" id="rememberme"></p>
                        <div id="login-links">
                            <a href="">Olvidé mi contraseña</a>
                            <a href="../HTML/register-user.html">Crear una cuenta nueva</a>
                        </div>
                </div>
                <p id="login-buttom">
                    <input type="submit" class="btn btn-login" value="Ingresar">
                    <!--Username = Incap Password = 1234-->
                </p>
                <div class="providers">
                    <span>Otro método de autenticación</span>
                    <a href="https://accounts.google.com/Login" id="login-google"><i class="fa-brands fa-google"></i>  oogle</a>
                    <a href="https://www.facebook.com/login.php" id="login-facebook"><i class="fa-brands fa-facebook"></i>  Facebook</a>
                    <a href="https://twitter.com/login" id="login-twitter"><i class="fa-brands fa-twitter"></i>  Twitter</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>