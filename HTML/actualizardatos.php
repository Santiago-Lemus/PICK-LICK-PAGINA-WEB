<?php
session_start();
$conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
$emailid=$_SESSION['usr_user'];
$resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
$fila = mysqli_fetch_assoc($resultado);
$consulta=mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario=$fila[id_usuario]");
if($reg = mysqli_fetch_array($consulta))
{?>
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
                <h2>Actualiza aquí los datos de tu USUARIO</h2>
                <form action="../PHP/actualizardatos.php" method="POST">
                <p class="login-inp">
                    <label for="username">NOMBRE</label>
                    <input type="text" name="nombre" id="username" value="<?php echo $reg['usr_nombre'];?>">
                </p>
                <p class="login-inp">
                    <label for="username">USUARIO</label>
                    <input type="text" name="usuario" id="username" value="<?php echo $reg['usr_user'];?>">
                </p>
                <p class="login-inp">
                    <label for="username">EMAIL</label>
                    <input type="text" name="email" id="username" value="<?php echo $reg['usr_email'];?>">
                </p>
                <p class="login-inp">
                    <label for="username">TELEFONO</label>
                    <input type="text" name="telefono" id="username" value="<?php echo $reg['usr_telefono'];?>">
                </p>
                <div id="register-bottons">
                        <input type="submit" value="ACTUALIZAR" id="register-submit">
                        <input type="reset" value="BORRAR" id="register-reset">
                    </div>
                </form>
            </div>
        </section>
    </body>
    </html>
<?php
}
?>



