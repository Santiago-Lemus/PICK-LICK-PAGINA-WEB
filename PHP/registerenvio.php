<?php
session_start();
$conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$tipoenv = $_POST['tipoenv'];
$codigo = $_POST['codigo'];
$anotacion = $_POST['anotacion'];
$idusuario = $_SESSION['usr_user'];
$fecha_env = date("Y-m-d");
$fecha_recibido = date("Y-m-d", strtotime($fecha_env . " +7 days"));
$resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$idusuario'");
$fila = mysqli_fetch_assoc($resultado);

$query = "INSERT INTO envios(env_ciudad, env_direccion, env_tipoenv, env_codigo, env_anotaciones, env_fechenvio, env_fechrecibido, id_usuario) VALUES('$ciudad', '$direccion', '$tipoenv', '$codigo', '$anotacion', '$fecha_env', '$fecha_recibido', $fila[id_usuario])"or die("Problemas al cargar datos:(".mysqli_error($conexion));

$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo'
    <script>
        alert("Datos de envio almacenados!");
        window.location = "../HTML/confirfactura.php";
    </script>
';
}else{
    echo'
    <script>
        alert("Intentalo nuevamente, los datos no se pudieron almacenar:(");
        window.history.back();
    </script>
';
mysqli_close($conexion);
}
?>