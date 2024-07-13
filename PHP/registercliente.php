<?php
session_start();
$conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipodoc = $_POST['tipodoc'];
$numdoc = $_POST['numdoc'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$idusuario = $_SESSION['usr_user'];
$resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$idusuario'");
$fila = mysqli_fetch_assoc($resultado);

$query = "INSERT INTO clientes(clie_nombre, clie_apellido, clie_tipdoc, clie_numdoc, clie_direccion, clie_telefono, clie_email, clie_ciudad, id_usuario) VALUES('$nombre', '$apellido', '$tipodoc', '$numdoc', '$direccion', '$telefono', '$email', '$ciudad', $fila[id_usuario])"or die("Problemas al cargar datos:(".mysqli_error($conexion));

$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo'
    <script>
        alert("Datos de facturación almacenados");
        window.location = "../HTML/insertenvio.php";
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