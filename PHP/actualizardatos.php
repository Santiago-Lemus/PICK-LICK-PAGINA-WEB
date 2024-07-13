<?php
session_start();
$conexion=mysqli_connect("localhost","root","","pick_lick_bdd") or die("Problemas con la conexion");
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$emailid=$_SESSION['usr_user'];
$resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
$fila = mysqli_fetch_assoc($resultado);

$actualizar = mysqli_query($conexion, "UPDATE usuarios SET usr_nombre='$nombre', usr_user='$usuario', usr_email='$email', usr_telefono='$telefono' WHERE id_usuario=$fila[id_usuario]");
if($actualizar){
    echo'
    <script>
        alert("USUARIO ACTUALIZADO CORRECTAMENTE");
        window.history.back();
    </script>
';
}else{
    echo'
    <script>
        alert("ERROR AL ACTUALIZAR DATOS:c");
        window.history.back();
    </script>
';
};
mysqli_close($conexion);
?>