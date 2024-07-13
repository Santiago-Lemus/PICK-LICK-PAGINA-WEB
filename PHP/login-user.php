<?php
session_start();
include 'conexion_be.php';
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usr_email='$correo' and usr_contraseña='$contraseña'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usr_user'] = $correo;
    header("location:../HTML/bienvenido.php");
    exit();
}else{
    echo '
        <script>
        alert("Usuario o contraseña incorrecta, por favor verifique los datos introducidos:(");
        window.location = "../HTML/login.php";
        </script>
    ';
    exit();
}
?>