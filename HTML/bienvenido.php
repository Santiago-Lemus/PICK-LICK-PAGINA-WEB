<?php
    session_start();
    if(!isset($_SESSION['usr_user'])){
        echo '
            <script>
            alert("Por favor, debes iniciar sesion");
            window.location = "../HTML/login.php";
            </script>
        ';
        die();
        session_destroy();
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
            <h2>¡Bienvenid@ guitarrista!</h2>
            <p id="login-mess">Es un placer tenerte aquí, proximamente tendremos más opciones para tí!</p>
            <a href="../PHP/cerrar_login.php" id="close_session">Cerrar sesión</a>
            <a href="consultarcliente.php" id="close_session">Consultar clientes</a>
            <a href="actualizardatos.php" id="close_session">Actualizar datos</a>
            <a href="deletedatos.php" id="close_session">Borrar datos</a>
            <a href="../index.php" id="go_shop">Ir a comprar!</a>
        </div>
    </section>
</body>
</html>